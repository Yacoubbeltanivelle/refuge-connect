@extends('layouts.app')

@section('title', $animal->name)

@section('content')
<h1 class="page-title">{{ $animal->name }}</h1>

<div class="fiche-detail">
    <div class="fiche-content">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" class="fiche-photo">

        <div class="fiche-info">
            <p class="fiche-field">
                <span class="fiche-label">Espèce :</span> {{ $animal->species }}
            </p>
            
            <p class="fiche-field">
                <span class="fiche-label">Age :</span> {{ $animal->age }} ans
            </p>

            <p class="fiche-description">
                {{ $animal->description }}
            </p>
        </div>
    </div>
</div>
@endsection