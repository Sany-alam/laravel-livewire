<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;

class Cart extends Component
{
	public $cartCount;
	public function remove_cart()
	{
		if (session()->has('user')) {
			Session::forget('user');
			$this->cartCount = count(Session::get('user'));
		}
		// CartCount();
	}
	public function add_to_cart()
	{
		$is = array('id' => 1,'name' => 'sany');
		if (session()->has('user')) {
			Session::push('user',$is);
			$this->cartCount = count(Session::get('user'));
		}
		else{
			Session::put('user',$is);
		}
		// CartCount();
	}
    public function render()
    {
        return view('livewire.cart');
    }
}
