<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'en_description',
        'fr_description',
        'en_job',
        'fr_job',
        'picture'
    ];
}