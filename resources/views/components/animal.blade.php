<div class="animal-card">
    <a href="{{ route('animal.fiche', $id) }}" class="animal-card-link">
        <img src="{{ asset($photo) }}" alt="{{ $name }}" class="animal-photo">

        <div class="animal-info">
            <h3 class="animal-name">{{ $name }}</h3>

            <p class="animal-details">
                <span>Espèce :</span> {{ $species }}
            </p>
            <p class="animal-details">
                <span>Âge :</span> {{ $age }} ans
            </p>

            <p class="animal-description">
                {{ Str::limit($description, 100) }}
            </p>
        </div>
    </a>

    <div class="animal-info">
        <div class="animal-actions">
            <a href="{{ route('animal.update', $id) }}" class="btn-edit">Modifier</a>
            <a href="{{ route('animal.delete', $id) }}" class="btn-delete">Supprimer</a>
        </div>
    </div>
</div>