<?php

namespace App\Models;

use App\Models\FederalEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipality extends Model
{
    use HasFactory;

    protected $table = 'municipality';
    protected $guard = [];

    public function federal_entity()
    {
        return $this->belongsTo(FederalEntity::class, 'code', 'federal_entity_code');
    }
}
