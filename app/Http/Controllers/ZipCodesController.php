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
            return $zips;
        } else {
            $zips = ZipCode::with(['federal_entity', 'settlements'])
                        ->where('zip_code', $id)
                        ->first();
            $zips = new ZipCodeResource($zips);
            
            Cache::put('zips_' . $id, $zips, 300);

            return $zips;
        }
    }
}
