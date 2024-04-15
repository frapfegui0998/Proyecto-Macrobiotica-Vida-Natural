<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\ProductRequest;
use App\Models\LogError;
use Exception;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }



    public function store(ProductRequest $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'description' => ['string', 'max:255'],
                'price' => ['required', 'numeric'],
                'stock_quantity' => ['required', 'numeric'],
                'image_url' => ['required', 'string', 'max:255'],
            ]
        );

        $validatedData = $request->validated();

        Products::create($validatedData);
        return to_route('admin.products.index')->with('message', 'Producto creado con éxito.');
    }

    public function story(ProductRequest $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['string', 'max:255'],
                'price' => ['required', 'numeric'],
                'stock_quantity' => ['required', 'numeric'],
                'image_url' => ['required', 'string', 'max:255'],
            ]);

            $validatedData = $request->validated();

            Products::create($validatedData);
            return redirect()->route('admin.products.index')->with('message', 'Producto creado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al insertar un producto',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }


    public function edit(Products $product)
    {
        $roles = Role::all();
        return view('admin.products.edit', compact('product', 'roles'));
    }

    public function update(ProductRequest $request, Products $product)
    {
        try {
            $validated = $request->validate([
                'name' => ['required', 'max:255', 'string'],
                'description' => ['required', 'max:255', 'string'],
                'price' => ['required', 'numeric', 'min:0'],
                'stock_quantity' => ['required', 'integer', 'min:0'],
                'image_url' => ['required', 'max:255', 'string'],
            ]);

            $product->update($validated);

            return redirect()->route('admin.products.index')->with('updated', 'Producto actualizado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al actualizar un producto',
                'user_email' => auth()->user()->email,
                'user_name' => auth()->user()->name,
                'exception' => $errorMessage,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return back()->with('error', 'Ha ocurrido un error');
        }
    }

    public function destroy(Products $product)
    {
        try {
            $product->delete();

            return back()->with('deleted', 'Producto eliminado con éxito.');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();

            LogError::create([
                'message' => 'Error al eliminar un producto',
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
