<x-admin-layout>

    <!-- component -->
    <div class="flex items-center justify-center p-12">

        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">


            <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="-mx-3 flex flex-wrap py-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="name" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Nombre del Usuario
                            </label>
                            <input type="text" name="name" id="name" placeholder="Nombre"
                                value="{{ $user->name }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        @error('name')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                        <!--  -->

                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="email" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Correo Electrónico
                            </label>
                            <input type="email" name="email" id="email" placeholder="Correo Electrónico"
                                value="{{ $user->email }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        @error('email')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="password" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Contraseña
                            </label>
                            <input type="password" name="password" id="password" placeholder="Contraseña"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        @error('password')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="password_confirmation"
                                class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Confirmar Contraseña
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Confirmar Contraseña"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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

            {{-- Aquí puedes incluir el bloque de Permisos del Usuario si es necesario --}}
            {{-- @if ($user->permissions)
                @foreach ($user->permissions as $user_permission)
                    <form method="POST"
                        action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">{{ $user_permission->name }}</button>
                    </form>
                @endforeach
            @endif --}}

            {{-- <form action="{{ route('admin.users.permissions', ['user' => $user->id]) }}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap py-3">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="permission" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Asignar Permiso
                            </label>
                            <select name="permission" id="permission"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('permission')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <a href="" class="px-4"><button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl text-lg font-bold text-white"
                            style="background-color: #4267B2">
                            Asignar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button></a>
                </div>
            </form> --}}
        </div>
    </div>

</x-admin-layout>

{
