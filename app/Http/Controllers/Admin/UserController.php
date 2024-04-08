<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email')->get();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    //Roles
    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'El Rol ya existe.');
        }
        $user->assignRole($request->role);
        return back()->with('message', 'Rol Asignado.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Rol removido.');
        }
        return back()->with('message', 'Este Rol no está asignado.');
    }

    //Permissions
    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'El permiso existe.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permiso añadido.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permiso revocado.');
        }
        return back()->with('message', 'El permiso no existe.');
    }

    public function create()
    {
        return view ('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'min:3'],

        ]
           );
        User::create($request->post());
        /*return redirect()->route ('admin.users.index')->with('success','Usuario creado con éxito.');*/
        return to_route('admin.users.index')->with('message', 'Usuario creado con éxito.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
        'password' => ['nullable', 'string', 'min:8', 'confirmed'],
    ]);

    $user->update($request->except('password_confirmation'));

    return redirect()->route('admin.users.index')->with('updated', 'Usuario actualizado con éxito');
}

    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return back()->with('deleted', 'No puedes eliminar un Administrador');
        }
        $user->delete();
        return back()->with('deleted', 'Usuario Eliminado con éxito');
    }
}
