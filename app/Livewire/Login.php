<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;


    public function save()
    {   
        
        $this->validate();
        
        $credentials = $this->only('email', 'password');

        if (Auth::attempt($credentials)) {

            session()->regenerate();
            session()->flash('success', 'Logged in successfully!');
            return redirect()->intended('/dashboard');
        }
        else
        {
        session()->flash('error', 'Login failed!');
        $this->addError('password', 'Invalid password.');
        $this->addError('email','Invalid email.');

        }
    }


    public function render()
    {
        return view('livewire.login');
    }
}
