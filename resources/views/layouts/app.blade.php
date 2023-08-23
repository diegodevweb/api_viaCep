<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>

<body>
    {{ $slot }}

   
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts 
    @wireUiScripts()

</body>
</html>
