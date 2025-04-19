<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Home extends Component
{
    public $progressBarPercentage;
    public $step = 1;
    public $height = null;
    public $weight = null;
    public $idealWeight = null;
    public $actionDate = null;
    public $chartLabels = [];
    public $chartValues = [];

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
        if ($this->step == 5) $this->chartGenerator();
    }

    public function previousStep()
    {
        if ($this->step == 1) return;
//        $this->stepValidator(true);
        $this->step --;
        $this->progressBarPercentageCalculator();
        if ($this->step == 5) $this->chartGenerator();
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

    private function chartGenerator():void
    {
        $this->chartLabels = [];
        $this->chartValues = [];
        $w = $this->weight;
        $iw = $this->idealWeight;
        for ($i=0;$i<=30;$i++) {
            $result = 0;
            $weightOnSeventhDay = $w - 0.1 * ($w - $iw);
            switch (true)
            {
                case ($i==0):
                case ($i==3):
                    $result = $this->weight;
                case ($i<3):
                    $result = $this->weight + array_rand([1,1.5,2]) * (($w<$iw) ? -1 : 1);
                    break;
                case ($i>3 && $i<=7):
                    $result = ((($weightOnSeventhDay - $w) / 4) * ($i - 3)) + $w;
                    break;
                case ($i>7 && $i<30):
                    $result = ((($iw - $weightOnSeventhDay) / 23) * ($i - 30)) + $iw;
                    break;
                case ($i == 30):
                    $result = $this->idealWeight;
                    break;
            }
            $result = round($result);
            $this->chartLabels[] = $i;
            $this->chartValues[] = $result;
        }

        $this->js("loadChart('" . json_encode($this->chartLabels). "', '". json_encode($this->chartValues) . "')");
    }


    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app');
    }
}
