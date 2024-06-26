<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class=" text-center font-semibold text-2x text-gray-800 mb-5">Crear Cuenta Nueva</h2>
    </div>
    @if (session('success'))
        <span class="p-2 bg-green-500 text-white text-center">{{ session('success') }}</span>
    @endif

    <form wire:submit='create' action="" class="">
        <label class="mt-3 block tetx-sm font-medium leading-6 text-gray-900">Nombre</label>
        <input wire:model='name' class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full p-3" type="text" id="name" placeholder="Escriba su nombre aqui">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <label class="mt-3 block tetx-sm font-medium leading-6 text-gray-900">Correo Electronico</label>
        <input wire:model='email' class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full p-3" type="email" id="email" placeholder="correo@correo.com">
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <label class="mt-3 block tetx-sm font-medium leading-6 text-gray-900">Password</label>
        <input wire:model='password' class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full p-3" type="password" id="password" placeholder="********">
        @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <label class="mt-3 block tetx-sm font-medium leading-6 text-gray-900">Foto de perfil</label>
        <input wire:model='image' class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded block w-full p-3" type="file" id="image" accept="image/png, image/jpeg, image/jpg">
        @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        @if ($image)
            <img class="rounded w-10 h-10 mt-5 block" src="{{ $image->temporaryUrl() }}" alt="">
        @endif


        {{-- Loading States Sirve para momentos de carga se le espcifica loading y que etiqueta se espera--}}
        <div wire:loading wire:target='create'>
            <span class="text-green-500">Subiendo...</span>
        </div>


        {{-- Loader para envio de formulario --}}
        {{-- <div wire:loading.delay.longest wire:target='create'>
            <span class="text-green-500">Creando cuenta...</span>
        </div> --}}

        {{-- Se puede eviar que se vuelva a dar click al boton agregando: wire:loading.remove esto hara que desaparezca el elemento
            -2 Forma:
            Se puede desbilitar el elemento wire:loading.attr='disabled'
        --}}
        <button wire:loading.attr='disabled' class="p-3 mt-3 bg-green-700 hover:bg-green-500 w-full text-white rounded shadow" type="submit" >Crear Cuenta</button>
    </form>
</div>
