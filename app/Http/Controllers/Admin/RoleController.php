<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RolesRequest;
use App\Models\LogError;
use Exception;

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
        try {
            $validated = $request->validate(['name' => ['required', 'min:3', 'max:255']]);
            Role::create($validated);

            return to_route('admin.roles.index')->with('message', 'Rol creado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al insertar un rol',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function edit(Role $role)
    {
        try {
            // Verificar si el rol es "admin"
            if ($role->name === 'admin') {
                return redirect()->back()->with('deleted', 'No puedes editar el rol de administrador.');
            }

            $permissions = Permission::all();
            return view('admin.roles.edit', compact('role', 'permissions'));
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al editar un rol administrador',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function update(RolesRequest $request, Role $role)
    {
        try {
            $validated = $request->validate(['name' => ['required', 'min:3']]);
            $role->update($validated);

            return to_route('admin.roles.index')->with('updated', 'Rol actualizado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al editar un rol',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function destroy(Role $role)
    {
        try {
            if ($role->name === 'admin') {
                return back()->with('deleted', 'No puedes eliminar el rol de administrador.');
            }

            $role->delete();
            return back()->with('deleted', 'Rol eliminado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al eliminar un rol',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function givePermission(Request $request, Role $role)
    {
        try {
            if ($role->hasPermissionTo($request->permission)) {
                return back()->with('message', 'El permiso existe.');
            }
            $role->givePermissionTo($request->permission);
            return back()->with('message', 'Permiso añadido.');
        } catch (Exception $e) {

            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al asignar un permiso',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        try {
            if ($role->hasPermissionTo($permission)) {
                $role->revokePermissionTo($permission);
                return back()->with('deleted', 'Permiso revocado.');
            }
        } catch (Exception $e) {

            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al revocar un permiso',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }
}
