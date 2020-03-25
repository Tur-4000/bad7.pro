<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::select('id', 'user_friendly_name', 'name', 'guard_name', 'description')
            ->orderBy('id', 'ASC')
            ->paginate();

        return view('manage.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd(__METHOD__);

        $role = new Role();
        $permissions = Permission::all();
        $create = true;

        return view('manage.roles.create', compact('role', 'permissions', 'create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
//        dd(__METHOD__, $request);

        if ($role = Role::create($request->except('permissions'))) {
            $this->syncPermissions($request, $role);
            flash('Новая роль успешно добавлена.')->important();
        } else {
            flash()->error('Невозможно создать роль.');
        }

        return redirect()
            ->route('manage.role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
//        dd(__METHOD__, $role);
        $permissions = Permission::pluck('name', 'id');

        return view('manage.roles.show', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
//        dd(__METHOD__, $role);

        $permissions = Permission::all();

        return view('manage.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
//        dd(__METHOD__, $role, $request);

        $role->fill($request->except('permissions'));
        $this->syncPermissions($request, $role);
        $role->save();

        flash('Роль успешно обновлена.')->important();

        return redirect()
            ->route('manage.role.show', $role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
//        dd(__METHOD__, $role);

        $role->delete();

        return redirect()->route('manage.role.index');
    }


    private function syncPermissions(Request $request, $role)
    {
        $oldPermissions = $role->permissions;

        foreach ($oldPermissions as $oldPermission) {
            $role->revokePermissionTo($oldPermission);
        }

        $permissions = $request->get('permissions', []);

        foreach ($permissions as $permissionId) {
            $permission = Permission::findOrFail($permissionId);
                $role->givePermissionTo($permission);
        }

        return $role;
    }
}
