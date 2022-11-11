<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\ZipCodeResource;

class ZipCodesController extends Controller
{
    public function show($id)
    {
        $zips = Cache::get('zips_' . $id);
        
        if(isset($zips)) {
            return json_decode($zips, FALSE);
        } else {
            $zips = ZipCode::with(['federal_entity', 'settlements.settlement_type', 'municipality' => function($q){
                            $q->select([DB::raw('CAST(`key` as UNSIGNED) `key`'), DB::raw('UPPER(name) as name')]);
                        }])
                        ->where('zip_code', $id)
                        ->select(['zip_code', 'locality', 'c_estado', 'c_mnpio'])
                        ->first(['zip_code', 'locality']);
            Cache::put('zips_' . $id, $zips, 300);

            return $zips;
        }
    }
}
