@extends('layouts.app')
@section('title', 'Accueil')
@section('content')

<h1>Nos animaux</h1>
<div>
    @foreach($animaux as $animal)
    <a href="{{ route('animal.fiche', $animal->id) }}">
        <x-animal
            :id="$animal['id']"
            :photo="$animal['photo']"
            :name="$animal['name']"
            :age="$animal['age']"
            :species="$animal['species']"
            :description="$animal['description']" />
    </a>
    @endforeach

</div>
@endsection