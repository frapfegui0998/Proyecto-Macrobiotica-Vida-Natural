<x-admin-layout>
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
            color: #fff;
            /* Cambiando el color del texto a blanco */
        }

        .form-group textarea {
            width: 100%;
            padding: 15px;
            font-size: 24px;
            color: #fff;
            /* Cambiando el color del texto a blanco */
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

    <body>
        <!-- component -->
        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full max-w-[550px]">
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

                <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="-mx-3 flex flex-wrap py-5">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="name"
                                    class="py-2 mb-3 block text-base font-medium text-[#07074D] text-white">
                                    Nombre del Producto
                                </label>
                                <input type="text" name="name" id="name" placeholder="Nombre del Producto"
                                    value="{{ $product->name }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="description"
                                    class="py-2 mb-3 block text-base font-medium text-[#07074D] text-white">
                                    Descripción del Producto
                                </label>
                                <input type="text" name="description" id="description" placeholder="Descripción"
                                    value="{{ $product->description }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="image_url"
                                    class="py-2 mb-3 block text-base font-medium text-[#07074D] text-white">
                                    Imagen del Producto
                                </label>
                                <input type="text" name="image_url" id="image_url" placeholder="Imagen"
                                    value="{{ $product->image_url }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('image_url')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="price"
                                    class="py-2 mb-3 block text-base font-medium text-[#07074D] text-white">
                                    Precio del Producto
                                </label>
                                <input type="text" name="price" id="price" placeholder="Precio del Producto"
                                    value="{{ $product->price }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('price')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="stock_quantity"
                                    class="py-2 mb-3 block text-base font-medium text-[#07074D] text-white">
                                    Cantidad en Stock
                                </label>
                                <input type="text" name="stock_quantity" id="stock_quantity"
                                    placeholder="Cantidad en Stock" value="{{ $product->stock_quantity }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('stock_quantity')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <a href="{{ route('admin.products.index') }}" class="px-3">
                            <button type="button"
                                class="group relative h-10 w-28 overflow-hidden rounded-md text-lg font-bold text-white"
                                style="background-color: #4267B2">
                                Regresar
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-md transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button>
                        </a>
                        <button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-md text-lg font-bold text-white"
                            style="background-color: #4267B2">
                            Editar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-md transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-admin-layout>
