<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'description_ext',
        'bg_image',
        'video_url',
        'order',
    ];
}
