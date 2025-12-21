@extends('layouts.app')

@section('title', $animal->name)

@section('content')
<div class="fiche-detail">
    <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" class="fiche-photo">

    <div class="fiche-info">
        <h1>{{ $animal->name }}</h1>

        <p><strong>Espèce :</strong> {{ $animal->species }}</p>
        <p><strong>Âge :</strong> {{ $animal->age }} ans</p>

        <hr>

        <p class="description">
            {{ $animal->description }}
        </p>

        <div class="actions">
            <a href="{{ url('animal/update/'.$animal->id) }}" class="btn-primary">Modifier</a>

            <a href="{{ url('animal/delete/'.$animal->id) }}" style="color: red; margin-left: 15px;">Supprimer</a>
        </div>
    </div>
</div>
@endsection