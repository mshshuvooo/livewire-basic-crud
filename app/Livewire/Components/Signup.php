<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\SignupForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Signup extends Component
{
    public SignupForm $signup_form;
    public function render()
    {
        return view('livewire.components.signup');
    }

    public function signup(){
        $user = User::create($this->signup_form->validate());
        $this->signup_form->reset();
        Auth::login($user);
        session()->flash('success', 'User Register Successfull');
        return $this->redirect('/students', navigate:true);
    }
}
