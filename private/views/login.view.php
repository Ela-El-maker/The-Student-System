<?php $this->view('includes/header') ?>

<!-- <div class="container-fluid">
    <div style="margin-top:50px;width: 100%; max-width: 310px;" class="p-4 mx-auto shadow rounded">

    <h3 class="text-center">My School</h3>
    <img src="<?= ROOT ?>/logo.png" class="d-block mx-auto rounded-circle" style="width: 70px;" >
    <h3>Login</h3>

    <input class="form-control" type="email" name="email" id="" placeholder="email" autofocus>
    <br>
    <input class="form-control" type="password" name="password" id="" placeholder="password">
    <br>
    <button type="submit" class="btn btn-primary">Login</button>
    </div>
</div> -->
<form>
    <div class="container-fluid">
        <div style="margin-top:50px;width: 100%; max-width: 310px;" class="p-4 mx-auto shadow rounded">

       
            
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="my-2 form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="my-2 form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
        </div>
    </div>
</form>
<?php $this->view('includes/footer') ?>