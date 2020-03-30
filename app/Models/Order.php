<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'company',
        'description',
        'contact',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower(e(strip_tags($value)));
    }

    public function setCompanyAttribute($value)
    {
        $this->attributes['company'] = e(strip_tags($value));
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = e(strip_tags($value));
    }

    public function setContactAttribute($value)
    {
        $this->attributes['contact'] = e(strip_tags($value));
    }

    public function getNameAttribute($value)
    {
        return Str::title($value);
    }
}
