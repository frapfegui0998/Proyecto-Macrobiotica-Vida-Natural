<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PreventAdminRoleDeletion
{
    public function handle(Request $request, Closure $next)
    {
        $roleId = $request->route('role');
        $role = Role::find($roleId);

        if ($role->name === 'admin') {
            return redirect()->back()->with('error', 'No puedes eliminar el rol de administrador.');
        }

        return $next($request);
    }
}
