<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Home extends Component
{
    public $progressBarPercentage;
    public $step = 12;
    public $height = null;
    public $weight = null;
    public $idealWeight = null;
    public $actionDate = null;

    protected $listeners = [
        "HomeNextStep" => "nextStep",
    ];

    public function mount()
    {
        $this->progressBarPercentageCalculator();
    }

    public function progressBarPercentageCalculator()
    {
        if ($this->step == 17) $this->progressBarPercentage = 100;
        else $this->progressBarPercentage = (int)round(($this->step / 17) * 100);
    }

    public function nextStep()
    {
        $this->stepValidator();
        $this->step ++;
        $this->progressBarPercentageCalculator();
    }

    public function previousStep()
    {
        if ($this->step == 1) return;
//        $this->stepValidator(true);
        $this->step --;
        $this->progressBarPercentageCalculator();
    }

    public function stepValidator($goingToPreviousStep = false)
    {
        $newStep = $this->step + ($goingToPreviousStep ? -1 : 1);
        switch ($newStep)
        {
            case 3:
                if (!$this->height) throw ValidationException::withMessages(['height' => 'لطفا قد خود را وارد کنید!']);
                break;
            case 4:
                if (!$this->weight)
                    throw ValidationException::withMessages(['weight' => 'لطفا وزن خود را وارد کنید!']);
                break;
            case 5:
                if (!$this->idealWeight)
                    throw ValidationException::withMessages(['idealWeight' => 'لطفا وزن ایده آل خود را وارد کنید!']);
                break;
            case 13:
                if (!$this->actionDate)
                    throw ValidationException::withMessages(['actionDate' => 'لطفا تاریخ را انتخاب کنید!']);
                break;
        }
    }

    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app');
    }
}
