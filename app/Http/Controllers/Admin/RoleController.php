<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RolesRequest;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(RolesRequest $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3', 'max:255']]);
        Role::create($validated);

        return to_route('admin.roles.index')->with('message', 'Rol creado con éxito.');
    }

    public function edit(Role $role)
{
    // Verificar si el rol es "admin"
    if ($role->name === 'admin') {
        return redirect()->back()->with('deleted', 'No puedes editar el rol de administrador.');
    }

    $permissions = Permission::all();
    return view('admin.roles.edit', compact('role', 'permissions'));
}

    public function update(RolesRequest $request, Role $role)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);

        return to_route('admin.roles.index')->with('updated', 'Rol actualizado con éxito.');
    }

    public function destroy(Role $role)
{
    if ($role->name === 'admin') {
        return back()->with('deleted', 'No puedes eliminar el rol de administrador.');
    }

    $role->delete();
    return back()->with('deleted', 'Rol eliminado con éxito.');
}

    public function givePermission(Request $request, Role $role)
    {
        if ($role->hasPermissionTo($request->permission)) {
            return back()->with('message', 'El permiso existe.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message', 'Permiso añadido.');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('message', 'Permiso revocado.');
        }
        return back()->with('deleted', 'El permiso no existe.');
    }
}
