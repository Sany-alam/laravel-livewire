<div>
	<div class="card">{{$cartCount}}</div><button wire:click="remove_cart">Remove cart</button>
	<div class="row">
    @for($i=0;$i<10;$i++)
    	<div class="col-3 my-2">
    		<div class="card">
    			<div class="card-body">
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    			</div>
    			<div class="card-footer">
    				<button class="btn btn-primary" wire:click="add_to_cart">Add to cart</button>
    			</div>
    		</div>
    	</div>
    @endfor
	</div>
</div>
