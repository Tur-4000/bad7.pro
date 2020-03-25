<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    protected $fillable = [
        'name', 'guard_name', 'user_friendly_name', 'description',
    ];
}
