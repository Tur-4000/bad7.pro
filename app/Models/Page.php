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
        'user_friendly_name',
        'description',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public static function defaultPages()
    {
        return [
            'main',
            'services',
            'portfolio',
            'contacts',
        ];
    }
}
