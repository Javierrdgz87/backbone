<?php

namespace App\Http\Controllers;

use StdClass;
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
        $zip_code = new stdClass();
        if(isset($zips)) {
            $zip_code = json_decode($zips, FALSE);
            return $zip_code;
        } else {
            $zips = ZipCode::with(['federal_entity', 'settlements.settlement_type', 'municipality' => function($q){
                            $q->select(['key', DB::raw('UPPER(name) as name')]);
                        }])
                        ->where('zip_code', $id)
                        ->select(['zip_code', 'locality', 'c_estado', 'c_mnpio'])
                        ->first(['zip_code', 'locality']);
            $zip_code = $zips;
            Cache::put('zips_' . $id, $zip_code, 300);

            return $zip_code;
        }
    }
}
