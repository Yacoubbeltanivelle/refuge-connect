<header>
    <div class="header-logo">
        <img src="{{ asset('logo.png') }}" alt="Logo Refuge Connect">
    </div>
    <nav>
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('animal.create') }}" class="btn-primary">Ajouter un animal</a>
    </nav>
</header>