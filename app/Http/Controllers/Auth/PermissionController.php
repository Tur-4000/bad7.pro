<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Auth\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::select('id', 'user_friendly_name', 'name', 'guard_name', 'description')
            ->orderBy('id', 'ASC')
            ->paginate();

        return view('manage.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd(__METHOD__);

        $permission = new Permission();

        return view('manage.permissions.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
    {
//        dd(__METHOD__, $request);

        if ($permission = Permission::create($request->all())) {
            flash('Новое разрешение успешно добавлено.')->important();
        } else {
            flash()->error('Невозможно создать разрешение.');
        }

        return redirect()->route('manage.permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
//        dd(__METHOD__, $permission);

        return view('manage.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
//        dd(__METHOD__, $permission);

        return view('manage.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
//        dd(__METHOD__, $request, $permission);

        $permission->fill($request->all());
        $permission->save();

        flash('Разрешение успешно обновлено.')->important();

        return redirect()
            ->route('manage.permission.show', $permission);
    }
}
