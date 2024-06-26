<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class RegisterForm extends Component
{

    use WithFileUploads;

    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|email|max:255|unique:users')]
    public $email;

    #[Rule('required|min:3')]
    public $password;

    #[Rule('nullable')]
    public $image = null;

    public function create()
    {
        sleep(1);

        $validated = $this->validate();


        if($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        $user = User::create($validated);

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'User Created!');

        // Comunicar 2 componentes se crea el disparador
        $this->dispatch('user-created', $user); // Aqui vamos al component al acual vamosa a interactuar
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
