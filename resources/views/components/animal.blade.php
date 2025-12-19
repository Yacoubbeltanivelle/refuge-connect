<div style="border: 5px solid #055aecff; padding: 15px; margin-bottom: 10px;">


    <img src="{{ asset($photo) }}" alt="{{ $name }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">

    <h3>{{ $name }}</h3>

    <div>
        Espèce : {{ $species }} <br>
        Âge : {{ $age }} ans
    </div>

    <p>
        {{ Str::limit($description, 100) }}
    </p>

    <div>
        <a href="#" style="color: #52c9ff;">Modifier</a>
        <a href="#" style="color: #e3342f;">Supprimer</a>
    </div>

</div>