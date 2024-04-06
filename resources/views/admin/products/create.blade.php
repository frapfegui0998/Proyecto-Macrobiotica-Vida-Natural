<x-admin-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Agregar producto</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #4267B2;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .form-group input {
                width: 100%;
                padding: 15px;
                font-size: 24px;
            }

            .btn-primary {
                background-color: #4267B2;
                border: none;
                padding: 15px 30px;
                font-size: 24px;
                color: #fff;
            }

            .btn-primary:hover {
                background-color: #4f4f4f;
            }
        </style>
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Agregar producto</h2>
                    </div>

                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf
                <div class="flex flex-wrap -mx-3 py-2">
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="name" class="py-2 mb-1 block text-base font-medium text-[#07074D]">
                                Nombre del producto
                            </label>
                            <input type="text" name="name" placeholder="Nombre del producto" required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="description" class="py-2 mb-1 block text-base font-medium text-[#07074D]">
                                Descripción (Opcional)
                            </label>
                            <input type="text" name="description" placeholder="Descripción (Opcional)"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('description')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 py-2">
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="image_url" class="py-2 mb-1 block text-base font-medium text-[#07074D]">
                                Imagen (Opcional)
                            </label>
                            <input type="text" name="image_url" placeholder="Imagen (Opcional)"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('image_url')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="price" class="py-2 mb-1 block text-base font-medium text-[#07074D]">
                                Precio
                            </label>
                            <input type="number" name="price" placeholder="Precio" required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('price')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 py-2">
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="stock_quantity" class="py-2 mb-1 block text-base font-medium text-[#07074D]">
                                Cantidad
                            </label>
                            <input type="text" name="stock_quantity" placeholder="Cantidad" required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('stock_quantity')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="group relative h-12 w-32 overflow-hidden rounded-lg bg-[#4267B2] text-lg font-bold text-white">
                        Crear
                        <div
                            class="absolute inset-0 h-full w-full scale-0 rounded-lg transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                        </div>
                    </button>
                    <div class="mx-3"></div>
                    <a href="{{ route('admin.products.index') }}"
                        class="flex items-center justify-center h-12 px-6 font-semibold text-white transition duration-500 ease-in-out transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        <span class="inline-block">Regresar</span>
                    </a>
                </div>
            </form>
        </div>
    </body>

    </html>
</x-admin-layout>
