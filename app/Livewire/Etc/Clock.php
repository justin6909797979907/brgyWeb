<?php

namespace App\Livewire\Etc;

use Livewire\Component;

class Clock extends Component
{

    public $time;

    public function mount()
    {

        $this->updateTime();

    }

    public function updateTime()
    {

        $this->time = now()->format('M d, Y h:i:s A');

    }



    public function render()
    {
        return view('livewire.etc.clock');
    }
}
