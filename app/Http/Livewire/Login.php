<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
	public $email,$password;

	public function submit()
	{
		$this->validate([
			'email' => 'email|required',
			'password' => 'required',
		]);
		Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        return redirect(url('/'));
	}

    public function render()
    {
        return view('livewire.login');
    }
}
