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

<style>
label {
  padding-top: 15px;
}
</style>
</head>

<body background = "login-background.jpg" id ="LoginForm" background-repeat: no-repeat; background-position: center; background-size: cover; padding: 10px;padding-top: 0px;padding-left: 0px;padding-right: 0px;>

  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h4 class="nav-header">Regent Produce</h4>
        <ul>
          <li>
            <a href="Website/index.html">Home</a>
          </li>
          <li>
            <a href="products.php">Products</a>
          </li>
          <li>
            <a href="user.php">Edit Details</a>
          </li>
          <li>
            <a href="transactions.php">Transaction History</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- cart icon -->
      <div class="row d-flex justify-content-end" style="margin: 0;">
        <div >
          <a href="cart.php" class="cart" data-toggle="tooltip" data-placement="bottom" title="Shopping cart">
              <i class="fas fa-shopping-cart" style="margin-right: 4px; color: white"></i>
            </a>
        </div>
      </div>
    </nav>
  </div>

  <div class="container-fluid">
  <div class="login-form" style="margin: 0 auto">
  <div class="invoice">
      <div class="panel">
     <h1>Transaction History</h1>
     <p>Your previous order details</p>
     </div>

     <!-- placeholders and values should be the users current info -->
     <div class="row">
       <table class="table table-borderless table-status" style="margin-bottom: 2%;">
         <thead class="thead-style">
           <tr>
             <th scope="col">Order ID</th>
             <th scope="col">Product</th>
             <th scope="col">Quantity</th>
             <th scope="col">Price</th>
             <th scope="col">Order Date</th>
             <th scope="col">Shipping company</th>
           </tr>
         </thead>
         <tbody >
           <tr>
             <td>123</td>
             <td>test</td>
             <td>test</td>
             <td>R 0000</td>
             <td>22/11/18</td>
             <td>DHL</td>
           </tr>
         </tbody>
       </table>
     </div>

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
