<?php

namespace App\Models;

use App\Models\Municipality;
use App\Models\FederalEntity;
use App\Models\SettlementsType;
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
    
    public function federal_entity(){
        return $this->hasOne(FederalEntity::class, 'code', 'c_estado');
    }
    
    public function settlements(){
        return $this->hasMany(ZipCode::class, 'zip_code', 'zip_code')
                    ->select(['zip_code', 'id_asenta_cpcons as key', 'd_asenta as name', 'd_zona as zone_type', 'd_tipo_asenta as settlement_type']);
    }
}
