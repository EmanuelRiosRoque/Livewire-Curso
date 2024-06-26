<div class="max-w-md p-5 mx-auto">
    <h2 class="mb-3 text-2xl">Lista de usuarios</h2>

    {{--
    --Se puede ocuapar un buscardor de diferentes maneras
    .1 = wire:model='search' -> Este es necesario dar click en el boton para que se busque
    .2 = wire:model.live='search' -> Este no es necesario solo con escribir el texto
    .3 = wire:model.blur='search' -> Este lo que hace es que la  funcion y peticion se ejecuta cuando sale del input
    .4 = wire:model.debounce.300ms='search' -> La consulta se ejecuta despues de parar de escribir
    --}}

    <input wire:model.live='search'
            class="w-full p-3 text-sm text-gray-900 bg-gray-100 rounded ring-1 ring-inset ring-gray-300"
            type="text"
            placeholder="Buscar">

    {{-- <button wire:click='update' class="block px-4 py-2 mt-3 text-white bg-teal-500 rounded hover:bg-teal-800" type="button">Buscar</button> --}}

    <div role="status" class="p-4 my-3 border border-gray-200 divide-y divide-gray-200 rounded shadow">
        @foreach ($users as $user)
            <div wire:key='{{$user->id}}' class="flex items-center justify-between">
                <div>
                    <div class=" text-gray-900 rounded-full dark:bg-gray-600 w-24 mb-2.5">

                    </div>

                    <div class="w-32 text-xs text-gray-600 rounded-full ">
                        <h2 class="text-xl text-gray-600 ">{{ $user->name }}</h2>
                        <span>{{ $user->email }}</span>
                    </div>
                </div>
                <button class="px-5 py-1 text-white bg-teal-500 rounded-full hover:bg-teal-900">Ver</button>
            </div>
        @endforeach

    </div>
</div>
