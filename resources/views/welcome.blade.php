<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">

        {{-- Esto lo que hace es asignar la variable $seacrh ya con un argumento en este caso emanuel --}}
        @livewire('user-list-two',['search' =>'Emanuel'])
        {{-- <div class="flex">
            <div class="w-2/4">
                @livewire('user-list')
            </div>

            <div class="w-2/4">
                @livewire('register-form')
            </div>
        </div> --}}
    </body>
</html>
