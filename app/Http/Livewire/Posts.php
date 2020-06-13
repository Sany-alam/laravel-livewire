<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Auth;
use App\post;

class Posts extends Component
{
	use WithPagination;
	
	public $addpost;
	public $text;
	public $active;
	protected $listeners = [
		'SelectPost'
	];

	public function addpost()
	{
		$this->validate([
			'text' => 'required|max:100',
		]);
		post::create(['user_id'=>Auth::user()->id,'text'=>$this->text]);
		$this->text = "";
	}

	public function SelectPost($id)
	{
		$this->active = $id;
	}

    public function render()
    {
	    return view('livewire.posts',[
	        'posts' => post::latest()->paginate(1)
	    ]);
    }
}
