<?php

namespace App\Livewire;

use Livewire\Component;

class ProgressButton extends Component
{
    public bool $isSticky = false;
    public string $buttonText = "بعدی";

    public function nextStep()
    {
        $this->dispatch("HomeNextStep");
    }

    public function render()
    {
        return view('livewire.progress-button');
    }
}
