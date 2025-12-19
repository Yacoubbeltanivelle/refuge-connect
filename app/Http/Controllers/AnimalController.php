<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
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
