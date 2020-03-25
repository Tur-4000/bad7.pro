<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $fillable = [
        'name', 'guard_name', 'user_friendly_name', 'description',
    ];

    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_user',
            'edit_user',
            'delete_user',

            'view_roles',
            'add_role',
            'edit_role',
            'delete_role',

            'view_works',
            'add_work',
            'edit_work',
            'delete_work',

            'view_tasks',
            'add_task',
            'edit_task',
            'delete_task',
        ];
    }
}
