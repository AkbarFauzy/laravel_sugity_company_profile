<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    use HasFactory;
    protected $table = "sliders";

    protected $fillable = [
        'page',
        'tagline',
        'img',
        'page',
        'position',
        'x_offset',
        'y_offset',
    ];
}
