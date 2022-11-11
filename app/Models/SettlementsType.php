<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SettlementsType extends Model
{
    use HasFactory;
    protected $table = 'settlements_type';

    protected $hidden = ['key', 'code'];
}
