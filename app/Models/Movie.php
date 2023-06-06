<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'trailer',
        'movie',
        'casts',
        'categories',
        'release_date',
        'small_thumbnail',
        'large_thumbnail',
        'about',
        'short_about',
        'featured',
        'duration'
    ];
}
