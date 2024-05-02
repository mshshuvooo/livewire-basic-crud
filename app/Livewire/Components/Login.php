<?php

namespace App\Livewire\Components;

use Illuminate\Http\Request;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $login_form;

    public function render()
    {
        return view('livewire.components.login');
    }

    public function login(Request $request){
        if(Auth::attempt($this->login_form->validate())){
            $request->session()->regenerate();
            session()->flash('success', 'Login Successfull');
            return $this->redirect('/students', navigate:true);
        }else{
            $this->addError('login_form.wrong_credentials', 'Your email or password are wrong.');
        }

    }
}
