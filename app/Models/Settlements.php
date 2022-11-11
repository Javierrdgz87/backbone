<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\SettlementsType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Settlements extends Model
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
    protected $hidden = ['zip_code', 'c_tipo_asenta'];
    
    public function settlement_type(){
        return $this->hasOne(SettlementsType::class, 'code', 'c_tipo_asenta');
    }
}
