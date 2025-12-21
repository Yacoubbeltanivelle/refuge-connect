@extends('layouts.app')
@section('title', 'Accueil')
@section('content')

<h1 class="page-title">Nos animaux</h1>

<div class="animals-grid">
    @foreach($animaux as $animal)
        <x-animal
            :id="$animal['id']"
            :photo="$animal['photo']"
            :name="$animal['name']"
            :age="$animal['age']"
            :species="$animal['species']"
            :description="$animal['description']" />
    @endforeach
</div>

@endsection