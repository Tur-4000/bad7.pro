<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'title_tag',
        'description_tag',
        'keywords_tag',
    ];
}
