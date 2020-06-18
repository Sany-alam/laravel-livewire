<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
	public $email,$password,$remember_me;

	public function submit()
	{
		$this->validate([
			'email' => 'email|required',
			'password' => 'required',
		]);
		if (Auth::attempt(['email' => $this->email, 'password' => $this->password],$this->remember_me)) {
			return redirect()->intended(url('/'));
		}
        
	}

    public function render()
    {
        return view('livewire.login');
    }
}
