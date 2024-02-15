<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'en_name',
        'fr_name',
        'en_description',
        'fr_description',
        'en-distance',
        'fr_distance',
        'en_duration',
        'fr_duration',
    ];
}
