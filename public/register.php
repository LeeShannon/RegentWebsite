<?php

require_once("../resources/config.php");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/login.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>

<body background = "login-background.jpg" id ="LoginForm" style = "background-repeat: no-repeat; background-position: center; background-size: cover; padding: 10px;">

  <div class="row d-flex justify-content-left" style="margin: 0;">
    <div >
      <a href="Website/index.html" class="cart" data-toggle="tooltip" data-placement="bottom" title="Home">
          <i class="fas fa-home" style="font-size: 25px; color: white"></i>
      </a>
    </div>
  </div>

  <div class="container-fluid">
  <div class="login-form" style="margin: 0 auto">
  <div class="main-div">
      <div class="panel">
     <h1>Register</h1>
     <p>Please fill in all the fields</p>
     </div>
      <form id="Register" method="post">
        <div class="error-message">
          <p><?php display_message(); ?></p>
        </div>

		<?php add_user(); ?>
          <div class="form-group">
              <input class="form-control" type="text" name="fname" placeholder="Name" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="text" name="sname" placeholder="Surname" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="text" name="phone" placeholder="Contact Number" maxlength = "10" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="E-mail" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="text" name="country" placeholder="Country" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="text" name="city" placeholder="City" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="text" name="address" placeholder="Address" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
              <input class="form-control" type="password" name="password2" placeholder="Confirm Password" required>
          </div>
          <button type="submit" name="register" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
