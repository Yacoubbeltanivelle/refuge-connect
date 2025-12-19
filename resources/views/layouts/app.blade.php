<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RefugeConnect - @yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}">

</head>

<body style="font-family: sans-serif; background-color: #f5f8fa; margin: 0;">

    <header style="background-color: white; padding: 20px; text-align: center; border-bottom: 3px solid #52c9ff;">
        <img src="/logo.png" alt="" style="width: 100px; height: 100px; object-fit: cover; margin-bottom: 15px;">
        <h1 style="margin: 0; color: #52c9ff;">Refuge Connect</h1>
        <nav style="margin-top: 10px;">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('animal.create') }}" style="color: #52c9ff;">Ajouter un animal</a>
        </nav>
    </header>

    <main style="padding: 20px; max-width: 800px; margin: 0 auto;">
        @yield('content')
    </main>

    <footer style="text-align: center;">
        &copy; {{ date('Y') }} - Refuge Connect
    </footer>

</body>

</html>