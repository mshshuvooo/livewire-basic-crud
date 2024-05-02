<?php

namespace App\Livewire\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.components.header');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $this->redirect("/login", navigate:true);
    }
}
