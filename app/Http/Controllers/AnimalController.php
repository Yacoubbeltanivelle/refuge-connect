<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function create()
    {
        $animal = new Animal();

        if ($animal) {
            $animal->name = 'Coquillette';
            $animal->species = 'chien';
            $animal->age = 3;
            $animal->description = 'Un chien gentil.';
            $animal->photo = 'coquillette.png';
            $animal->save();
            return redirect('/');
        } else {
            return view('errors.not-found');
        }
    }


    public function update($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->name = $animal->name . ' modifié';
            $animal->save();
            return redirect('/');
        } else {
            return view('errors.not-found');
        }
    }


    public function delete($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->delete();
            return redirect('/');
        } else {
            return view('errors.not-found');
        }
    }

    public function show($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            return view('pages.fiche', ["animal" => $animal]);
        } else {
            return view('errors.not-found');
        }
    }
}
