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
            <!-- ERROR CATCH -->
            @if (session('error'))
                <div class="max-w-full mx-auto">
                    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">¡Alerta!</span> {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2 class="text-white">Agregar producto</h2>
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
                            <label for="name" class="py-2 mb-1 block text-base font-medium text-white">
                                Nombre del producto
                            </label>
                            <input type="text" name="name" placeholder="Nombre del producto"
                                value="{{ old('name') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="description" class="py-2 mb-1 block text-base font-medium text-white">
                                Descripción
                            </label>
                            <input type="text" name="description" placeholder="Descripción"
                                value="{{ old('description') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 py-2">
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="image_url" class="py-2 mb-1 block text-base font-medium text-white">
                                Imagen
                            </label>
                            <input type="text" name="image_url" placeholder="Imagen" value="{{ old('image_url') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('image_url')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="price" class="py-2 mb-1 block text-base font-medium text-white">
                                Precio
                            </label>
                            <input type="number" name="price" placeholder="Precio" value="{{ old('price') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 py-2">
                    <div class="w-full md:w-1/2 px-3">
                        <div class="mb-2">
                            <label for="stock_quantity" class="py-2 mb-1 block text-base font-medium text-white">
                                Cantidad
                            </label>
                            <input type="text" name="stock_quantity" placeholder="Cantidad"
                                value="{{ old('stock_quantity') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('stock_quantity')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
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
