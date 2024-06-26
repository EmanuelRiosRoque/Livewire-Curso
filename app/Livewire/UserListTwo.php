<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserListTwo extends Component
{

    public $search;

    // ¿Que es el mount? -> Basicamente es tu constructor (con lo que va inciar tu vista)
    // Para el ejemplo es necesario ir al conponente

    public function mount($search)
    {
      $this->search = $search;
    }

    public function render()
    {
        return view('livewire.user-list-two',[
            'users' => User::latest()
            ->where('name', 'like', "%{$this->search}%")
            ->paginate(5),
        ]);
    }
}
