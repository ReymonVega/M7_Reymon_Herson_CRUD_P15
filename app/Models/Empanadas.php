<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empanadas extends Model
{
    use HasFactory;

    protected $table = 'empanadas';
    protected $fillable = [
        'nombre',
        'sabor'
    ];
    protected $hidden = [];
}
