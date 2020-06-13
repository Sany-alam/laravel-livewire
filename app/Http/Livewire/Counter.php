<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
	public $i = 1;
	public function increament()
	{
		$this->i++;
	}
	public function decreament()
	{
		$this->i--;
	}
    public function render()
    {
        return view('livewire.counter');
    }
}
