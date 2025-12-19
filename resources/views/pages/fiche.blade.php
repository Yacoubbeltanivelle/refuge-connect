@extends('layouts.app')

@section('title', 'Fiche' . $animal->nom)

@section('content')
<x-animal
    :id="$animal['id']"
    :photo="$animal['photo']"
    :name="$animal['name']"
    :age="$animal['age']"
    :species="$animal['species']"
    :description="$animal['description']" />
@endsection