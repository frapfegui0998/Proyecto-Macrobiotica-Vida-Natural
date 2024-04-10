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

                <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="-mx-3 flex flex-wrap py-5">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="name" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
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
                                <label for="description" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                    Descripción del Producto
                                </label>
                                <textarea name="description" id="description" rows="4"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ $product->description }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="image_url" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                    Imagen del Producto
                                </label>
                                <textarea name="image_url" id="image_url" rows="4"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ $product->description }}</textarea>
                                @error('image_url')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="price" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
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
                                    class="py-2 mb-3 block text-base font-medium text-[#07074D]">
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
                    <div>
                        <a href="{{ route('admin.products.index') }}" class="px-4">
                            <button type="button"
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl text-lg font-bold text-white"
                                style="background-color: #4267B2">
                                Regresar
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button>
                        </a>
                        <button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl text-lg font-bold text-white"
                            style="background-color: #4267B2">
                            Editar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-admin-layout>
