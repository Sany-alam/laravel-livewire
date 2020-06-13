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
            <h2 class="m-b-0 text-center">Registration</h2>
        	<form wire:submit.prevent="submit">
        		<div class="form-group">
                    <label class="font-weight-semibold" for="email">Name</label>
                    <div class="input-affix">
                        <i class="prefix-icon anticon anticon-user"></i>
                        <input type="text" class="form-control" placeholder="Name" wire:model.lazy="form.name">
                    </div>@error('form.name') <small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-semibold" for="email">Email</label>
                    <div class="input-affix">
                        <i class="prefix-icon anticon anticon-user"></i>
                        <input type="email" class="form-control" placeholder="Email" wire:model.lazy="form.email">
                    </div>@error('form.email') <small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-semibold" for="password">Password:</label>
                    <a class="float-right font-size-13 text-muted" href="#">Forget Password?</a>
                    <div class="input-affix m-b-10">
                        <i class="prefix-icon anticon anticon-lock"></i>
                        <input type="password" class="form-control" placeholder="Password" wire:model.lazy="form.password">
                    </div>@error('form.password') <small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-semibold" for="password">Confirm Password</label>
                    <a class="float-right font-size-13 text-muted" href="#">Forget Password?</a>
                    <div class="input-affix m-b-10">
                        <i class="prefix-icon anticon anticon-lock"></i>
                        <input type="password" class="form-control" placeholder="Password" wire:model.lazy="form.password_confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-primary">Sumbit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
