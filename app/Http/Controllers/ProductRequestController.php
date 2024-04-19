<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductRequestController extends Controller
{

    // public function store(PermissionsRequest $request)
    // {
    //     try {
    //         $validated = $request->validate(['name' => ['required', 'min:3', 'string', 'max:255']]);
    //         Permission::create($validated);

    //         //Permission::create($request->validate([]));

    //         return redirect()->route('admin.permissions.index')->with('message', 'Permiso creado con éxito.');
    //     } catch (Exception $e) {
    //         $errorMessage = $e->getMessage();

    //         LogError::create([
    //             'message' => 'Error al insertar un permiso',
    //             'user_email' => auth()->user()->email,
    //             'user_name' => auth()->user()->name,
    //             'exception' => $errorMessage,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);

    //         // DB::table('log_errors')->insert([
    //         //     'message' => $errorMessage,
    //         //     'created_at' => now(),
    //         //     'updated_at' => now(),
    //         // ]);

    //         // Redirect back with error message
    //         return back()->with('error', 'Ha ocurrido un error');
    //     }
    // }
    //
}
