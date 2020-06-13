<div class="">
    <h1 class="my-5">Comments</h1>
	<form wire:submit.prevent="addcomment">
    <div class="form-group text-right">
		<input wire:model.lazy="text" class="form-control my-2"/>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Comment</button>
        @error('text')  <span class="alert alert-danger">{{$message}}</span> @enderror
    </div>
	</form>
    @if(session()->has('message'))
    <div class="my-3 alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @foreach($comments as $comment)
    <div class="card my-2">
    	<div class="card-body">
            <div class="d-flex justify-content-between">
                <h3 class="d-inline-block mr-3">{{$comment->creator->name}}</h3>
                <a href="javascript:void(0)" wire:click="deleteComment({{$comment->id}})"><span aria-hidden="true">&times;</span></a>
            </div>
            <small>{{$comment->updated_at->diffForHumans()}}</small>
    		<p>{{$comment->text}}</p>
    	</div>
    </div>
    @endforeach
    {{ $comments->links() }}
</div>
