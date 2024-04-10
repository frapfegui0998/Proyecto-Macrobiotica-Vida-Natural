<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\PermissionsRequest;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(PermissionsRequest $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3', 'string', 'max:255']]);
        Permission::create($validated);

        return to_route('admin.permissions.index')->with('message', 'Permiso creado con éxito.');
    }

    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission', 'roles'));
    }

    public function update(PermissionsRequest $request, Permission $permission)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $permission->update($validated);

        return to_route('admin.permissions.index')->with('updated', 'Permiso actualizado con éxito.');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return back()->with('deleted', 'Permiso eliminado con éxito.');
    }

    public function assignRole(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('message', 'El Rol ya existe.');
        }
        $permission->assignRole($request->role);
        return back()->with('message', 'Rol Asignado.');
    }

    public function removeRole(Permission $permission, Role $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('message', 'Rol removido.');
        }
        return back()->with('message', 'Este Rol no está asignado.');
    }
}
