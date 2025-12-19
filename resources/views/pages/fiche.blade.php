@extends('layouts.app')

@section('title', 'Fiche' . $animal->nom)

@section('content')
<x-animal
    :photo="$animal['photo']"
    :name="$animal['name']"
    :age="$animal['age']"
    :species="$animal['species']"
    :description="$animal['description']" />
@endsection