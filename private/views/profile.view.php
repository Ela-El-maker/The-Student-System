<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs') ?>

    <h4>Profile</h4>
    <div class="row">
        <div class="col-sm-3 ">
            <img src="<?= ASSETS ?>images/user_female.jpg" class="d-block mx-auto rounded-circle img-fluid" style="width: 150px;">
            <h3 class="text-center">Mary Jane</h3>
        </div>
        <div class="col-sm-9  bg-light p-3">
            <table class="table table-hover table-stiped ">
                <tr>
                    <th>First Name : </th>
                    <td>Mary</td>
                </tr>
                <tr>
                    <th>Last Name : </th>
                    <td>Jane</td>
                </tr>
                <tr>
                    <th>Gender : </th>
                    <td>Female</td>
                </tr>
                <tr>
                    <th>Date Created : </th>
                    <td>2021</td>
                </tr>
                
            </table>
        </div>
    </div>
    <hr>

    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
        </ul>
        <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp;</span>
      </div>
      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
    </div>
  </form>
</nav>
    </div>
</div>

<?php $this->view('includes/footer') ?>