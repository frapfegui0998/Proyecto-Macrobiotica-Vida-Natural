<x-admin-layout>
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
                                <span class="text-red-400 text-sm">{{ $message }}</span>
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
                                <span class="text-red-400 text-sm">{{ $message }}</span>
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
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="stock_quantity" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Cantidad en Stock
                            </label>
                            <input type="text" name="stock_quantity" id="stock_quantity"
                                placeholder="Cantidad en Stock" value="{{ $product->stock_quantity }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('stock_quantity')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <a href="" class="px-4"><button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl text-lg font-bold text-white"
                            style="background-color: #4267B2">
                            Editar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button></a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
