<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anthony Haddad</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">

</head>

<body>
    <main class="flex flex-col h-screen w-full">
        <x-header></x-header>
        <div class="flex-auto">
            @yield("content")
        </div>
        <x-footer></x-footer>
    </main>
</body>

</html>
