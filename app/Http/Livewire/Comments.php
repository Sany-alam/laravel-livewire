<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Auth;
use App\comment;

class Comments extends Component
{
	use WithPagination;

	protected $listeners = [
		'SelectPost'
	];

	public $showComments;
	public $post_id;
	public $text;

	public function SelectPost($id)
	{
		$this->post_id = $id;
	}

	public function addcomment()
	{
		if ($this->post_id == "") {
			return session()->flash('message','Select a post first!');
		}
		$this->validate([
			'text' => 'required|max:100',
		]);
		comment::create(['user_id'=>Auth::user()->id,'post_id'=>$this->post_id,'text'=>$this->text]);
		session()->flash('message',"Comment Succesfully Added");
		$this->text = "";
	}

	public function deleteComment($id)
	{
		comment::where('id',$id)->delete();
		session()->flash('message',"Comment Succesfully Deleted");
	}

    public function render()
    {
        return view('livewire.comments', [
            'comments' => comment::where('post_id',$this->post_id)->latest()->paginate(1),
        ]);
    }
}
