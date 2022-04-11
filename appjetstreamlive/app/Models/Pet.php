<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    //define los datos que deben ser llenados.
    protected $fillable = [
        'name',
        'age',
        'color'
    ];
}
