<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_name',
        'fr_name',
        'en_description',
        'fr_description',
        'distance',
        'distance_unit',
        'duration',
        'en_duration_unit',
        'fr_duration_unit',
        'picture'
    ];
}
