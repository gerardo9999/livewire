<?php
namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Counter extends Component
{
    public $Users;
    public $name;
    

    public function render()
    {
        $this->Users = User::all();
        return view('usuarios.counter');
    }

    public function store(){

    }
}
