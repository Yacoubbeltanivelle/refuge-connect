<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>RefugeConnect - @yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>