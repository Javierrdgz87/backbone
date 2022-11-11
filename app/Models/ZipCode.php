<?php

namespace App\Models;

use App\Models\Settlements;
use Illuminate\Support\Str;
use App\Models\Municipality;
use App\Models\FederalEntity;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZipCode extends Model
{
    use HasFactory;
    
    protected $table = 'zip_codes';
    protected $fillable = [
        'zip_code',
        'd_asenta',
        'd_tipo_asenta',
        'd_mnpio',
        'd_estado',
        'locality',
        'd_CP',
        'c_estado',
        'c_oficina',
        'c_CP',
        'c_tipo_asenta',
        'c_mnpio',
        'id_asenta_cpcons',
        'd_zona',
        'c_cve_ciudad',
    ];
    protected $hidden = ['c_estado', 'c_mnpio', 'c_tipo_asenta'];
    
    public function getLocalityAttribute(string $value): string
    {
        return Str::upper($value);
    }

    public function federal_entity(){
        return $this->hasOne(FederalEntity::class, 'code', 'c_estado');
    }

    public function municipality(){
        return $this->hasOne(Municipality::class, 'key', 'c_mnpio');
    }
    
    public function settlements(){
        return $this->hasMany(Settlements::class, 'zip_code', 'zip_code')
                    ->select(['zip_code', DB::raw('CAST(id_asenta_cpcons as UNSIGNED) `key`'), DB::raw('UPPER(d_asenta) as name'), DB::raw('UPPER(d_zona) as zone_type'), 'c_tipo_asenta']);
    }
}
