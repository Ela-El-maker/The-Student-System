<?php $this->view('includes/header') ?>

<form>
    <div class="container-fluid">
        <div style="margin-top:50px;width: 100%; max-width: 310px;" class="p-4 mx-auto shadow rounded">

     
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="my-2 form-floating">
                <input type="firstname" class="form-control" name="firstname" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="my-2 form-floating">
                <input type="lastname" class="form-control" name="lastname" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput">Last Name</label>
            </div>

            <div class="my-2 form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="my-2 form-floating">

            <select class="form-control" name="" id="">
                <option value="">--Select a Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            </div>

            <div class="my-2 form-floating">
            <select class="form-control" name="" id="">
                <option value="">--Select a Rank--</option>
                <option value="Student">Student</option>
                <option value="Reception">Reception</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Admin">Admin</option>
                <option value="Super">Super Admin</option>
            </select>
            </div>

            <div class="my-2 form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="my-2 form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Confirm Password">
                <label for="floatingPassword">Confirm Password</label>
            </div>

            
            <button class=" btn btn-lg btn-primary float-end" type="submit">Sign in</button>
            <button class=" btn btn-lg btn-warning" type="submit">Cancel</button>

        </div>
    </div>
</form>
<?php $this->view('includes/footer') ?>