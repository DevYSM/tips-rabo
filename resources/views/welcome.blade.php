<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraTips</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    @livewireStyles
</head>

<body class="antialiased">

    <div
        class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <h1 class="block w-100 py-4 bg-gray-100 dark:bg-gray-900 sm:items-center pt-4 text-center text-3xl font-bold">How
            to use Select2 With livewire</h1>
        <div class="flex justify-center">
            @livewire('city-zone-area')
        </div>
    </div>

    @livewireScripts
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>

        $(document).ready(function() {
            $('.select2').select2();
        });

        window.addEventListener('render-select2', event => {
            console.log('fired');
            $('.select2').select2();
        })

    </script>

    @stack('js')



</body>

</html>
