<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('components.layouts.app')]
#[Title('Barangay Patubig')]
class Home extends Component
{

    

    public function render()
    {
        return view('livewire.guest.home');
    }
}
