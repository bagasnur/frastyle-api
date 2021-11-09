<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/frastyle-icon.png') }}" type="image/png">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ (isset($title) ? $title.' | ' : '') . config('app.name') }}</title>

    {{-- Scripts --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js" integrity="sha256-HutwTOHexZPk7phZTEa350wtMYt10g21BKrAlsStcvw=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Icon --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    {{-- Custom Style --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <noscript
        >Please enable JavaScript in this Browser to run this app.
    </noscript>

    {{-- Content --}}
    @yield('main')

    {{-- Footer --}}
    <x-footer />

    <script>
        feather.replace()
    </script>
</body>
</html>