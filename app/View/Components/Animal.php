<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Animal extends Component
{
    public $name;
    public $species;
    public $age;
    public $description;
    public $photo;

    public function __construct($name, $species, $age, $description, $photo)
    {
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->description = $description;
        $this->photo = $photo;
    }

    public function render()
    {
        return view('components.animal');
    }
}
