<div class="container">
<style type="text/css">
	html,
	body {
	    height: 100%;
	}

	.container {
	    height: 100%;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	}
</style>
    <div class="card shadow" style="width: 350px">
        <div class="card-body">
            <h2 class="m-b-0 text-center">Login</h2>
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label class="font-weight-semibold" for="email">Email:</label>
                    <div class="input-affix">
                        <i class="prefix-icon anticon anticon-user"></i>
                        <input type="email" class="form-control" placeholder="Email" wire:model="email">
                    </div>@error('email') <small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-semibold" for="password">Password:</label>
                    <a class="float-right font-size-13 text-muted" href="#">Forget Password?</a>
                    <div class="input-affix m-b-10">
                        <i class="prefix-icon anticon anticon-lock"></i>
                        <input type="password" class="form-control" placeholder="Password" wire:model="password">
                    </div>@error('password') <small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
