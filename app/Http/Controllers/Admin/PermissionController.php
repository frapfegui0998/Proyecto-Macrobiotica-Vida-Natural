<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\PermissionsRequest;
use App\Models\LogError;
use Exception;

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
        try {
            $validated = $request->validate(['name' => ['required', 'min:3', 'string', 'max:255']]);
            Permission::create($validated);

            //Permission::create($request->validate([]));

            return redirect()->route('admin.permissions.index')->with('message', 'Permiso creado con éxito.');
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al insertar un permiso',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // DB::table('log_errors')->insert([
            //     'message' => $errorMessage,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // Redirect back with error message
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission', 'roles'));
    }

    public function update(PermissionsRequest $request, Permission $permission)
    {
        try {
            $validated = $request->validate(['name' => ['required', 'min:3']]);
            $permission->update($validated);

            return to_route('admin.permissions.index')->with('updated', 'Permiso actualizado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al actualizar un permiso',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }


    public function destroy(Permission $permission)
    {
        try {
            $permission->delete();

            return back()->with('deleted', 'Permiso eliminado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al eliminar un permiso',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function assignRole(Request $request, Permission $permission)
    {
        try {
            if ($permission->hasRole($request->role)) {
                return back()->with('message', 'El Rol ya existe.');
            }
            $permission->assignRole($request->role);
            return back()->with('message', 'Rol Asignado.');
        } catch (Exception $e) {

            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al asignar un rol a un permiso',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function removeRole(Permission $permission, Role $role)
    {
        try {
            // Verificar si el usuario tiene el rol de administrador y si es así, no permitir su eliminación
            if ($role->name === 'admin') {
                return back()->with('deleted', 'El rol de administrador no puede ser removido.');
            }

            if ($permission->hasRole($role)) {
                $permission->removeRole($role);
                return back()->with('deleted', 'Rol removido.');
            }

            return back()->with('deleted', 'Este Rol no está asignado.');
        } catch (Exception $e) {

            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al remover un rol de un permiso',
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
