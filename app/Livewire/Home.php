<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $page = 16;

    public function nextPage () {
        $this->page ++;
    }

    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app');
    }
}
