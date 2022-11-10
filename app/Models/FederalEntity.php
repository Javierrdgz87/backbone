<?php

namespace App\Models;

use App\Models\Municipality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FederalEntity extends Model
{
    use HasFactory;
    protected $table = 'federal_entity';
    
    public function municipality(){
        return $this->hasOne(Municipality::class, 'federal_entity_id', 'code');
    }
}
