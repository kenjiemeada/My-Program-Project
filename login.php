<?php
  include "header.php";
?>
<div class="wrapper">
  <form class="form-signin" method="POST">
    <h2 class="form-signin-heading text-center">ORDERING MANAGEMENT WITH</h2>
    <h2 class="form-signin-heading text-center">POINT OF SALE</h2>

<hr>
    <label for="exampleInputEmail1">Account Name</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
      </div>
      <input type="text" name="username" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <label for="exampleInputEmail1">Password</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
      </div>
      <input type="password" name="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <hr><br>

    <input class="login btn btn-block text-white" type="submit"  name="login" value="Login">
    
  </form>
</div>