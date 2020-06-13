<div class="">
    <h1 class="my-5">Posts</h1>
    <form wire:submit.prevent="addpost">
    <div class="form-group text-right">
        <input wire:model.lazy="text" class="form-control my-2"/>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Post</button>
        @error('text')  <span class="alert alert-danger">{{$message}}</span> @enderror
    </div>
    </form>
    @foreach($posts as $post)
    <div class="card my-2 @if($active == $post->id) bg-success text-light @endif" wire:click="$emit('SelectPost',{{$post->id}})">
    	<div class="card-body">
            <div class="d-flex justify-content-between">
                <h3 class="d-inline-block mr-3">{{$post->creator->name}}</h3>
            </div>
            <small>{{$post->updated_at->diffForHumans()}}</small>
    		<p>{{$post->text}}</p>
    	</div>
    </div>
    @endforeach
    {{ $posts->links() }}
</div>
