<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\user;

class Register extends Component
{
	public $form = [
		'name' => '',
		'email' => '',
		'password' => '',
		'password_confirmation' => '',
	];

	public function submit()
	{
		$this->validate([
					'form.name' => 'required',
					'form.email' => 'email|required',
					'form.password' => 'required|confirmed',
				]);
		user::create($this->form);
		redirect(url('/login'));
	}

    public function render()
    {
        return view('livewire.register');
    }
}
