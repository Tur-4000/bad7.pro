<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    protected $fillable = [
        'title',
        'text',
        'video_url',
    ];
}
