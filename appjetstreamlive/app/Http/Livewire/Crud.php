<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pet;

class Crud extends Component
{
    public $pets, $name, $age, $color, $pet_id;
    public function index()
    {
        $pets = Pet::all();
        return view('livewire.crud', compact('pets'));
    }

    public function create()
    {
        return view('livewire.create');
    }
}
