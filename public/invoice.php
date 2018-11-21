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
  <link rel="stylesheet" href="../assets/css/nav.css" />
  <link rel="stylesheet" href="../assets/css/cart.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</head>

<!--
user details

products ordered
total

shipping company
tracking number
button to tracking number
 -->
<body  background = "login-background.jpg" id ="LoginForm" style = "background-repeat: no-repeat; background-position: center; background-size: cover; padding: 10px;">

  <div class="row d-flex justify-content-left" style="margin: 0;">
    <div >
      <a href="cart.php" class="cart" data-toggle="tooltip" data-placement="bottom" title="Back">
          <i class="fas fa-chevron-circle-left" style="font-size: 25px"></i>
      </a>
    </div>
  </div>

  <div class="container-fluid">
  <div class="login-form" style="margin: 0 auto">
  <div class="main-div" style="width: 700px">
      <div class="panel">
     <h1>Invoice</h1>
     <p>Invoice number: 123123</p>
     </div>
     <hr>
      <form id="Login">

        <div style="margin: 15px">
          <div class="row">
            <!-- <div class="col"> -->
              <label style="padding-right: 2%">Name:</label>
              <p style="font-weight: 300">Lee</p>
            <!-- </div> -->
          </div>
          <div class="row">
            <label style="padding-right: 2%">Surname:</label>
            <p style="font-weight: 300">Georges</p>
          </div>
          <div class="row">
            <label style="padding-right: 2%">E-mail:</label>
            <p style="font-weight: 300">lee@test.com</p>
          </div>
          <div class="row">
            <label style="padding-right: 2%">City:</label>
            <p style="font-weight: 300; text-align: left">Cape Town</p>
          </div>
          <div class="row">
            <label style="padding-right: 2%">Country:</label>
            <p style="font-weight: 300; text-align: left">Western Cape</p>
          </div>
        </div>
        <hr>
          <table class="table table-responsive-lg table-borderless table-status" style="margin-bottom: 2%;">
            <thead class="thead-style">
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody >
              <tr>
                <td>test</td>
                <td>test</td>
                <td>R 0000</td>
              </tr>
            </tbody>
            <tfoot>
              <td></td>
              <td style="font-weight: 400">Total:</td>
              <td style="font-weight: 400">
                <p > R 00000</p>
              </td>
            </tfoot>
          </table>


          <hr>
          <div style="margin: 15px">
            <div class="row">
              <!-- <div class="col"> -->
                <label style="padding-right: 2%">Shipping company:</label>
                <p style="font-weight: 300">DHL</p>
              <!-- </div> -->
            </div>
            <div class="row">
              <label style="padding-right: 2%">Estimated Arrival:</label>
              <p style="font-weight: 300">11/11/18</p>
            </div>
              <div class="row">
                <label style="padding-right: 2%">Delivery Address:</label>
                <p style="font-weight: 300; text-align: left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
              <hr>
              <div class="row">
                <label style="padding-right: 2%">Tracking Number:</label>
                <p style="font-weight: 300">UYHGF123123</p>
              </div>
              <div class="row">
                <label style="padding-right: 2%">Waybill Number:</label>
                <p style="font-weight: 300">1343</p>
              </div>
          </div>

            <a href="#" class="btn btn-primary">View Shipment Tracking</a>

          <!-- <button type="button" name="submit" class="btn btn-primary">Login</button> -->
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
