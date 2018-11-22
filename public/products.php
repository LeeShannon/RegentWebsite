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
  <body>
    
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
            <li >
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
                <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        </div>

      </nav>
    </div>

    <div class="container-fluid" style="padding-top: 3%">
      <h1 style="margin-bottom: 3%">Products</h1>

      <ul class="nav nav-tabs">
        <li class="nav-item" >
          <a class="nav-link active" href="products.php" style="color: black !important; text-shadow: none" >All</a>
        </li>
<!--
        <li class="nav-item" >
          <a class="nav-link" href="fruits.php" style="color: black !important; text-shadow: none" >Fruits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="veg.php" style="color: black !important; text-shadow: none">Vegetables</a>
        </li>


-->
     <?php get_categories();?>
      </ul>


     <div class="row"  style="margin-top: 1%">
         <?php get_products(); ?>

     </div>
    </div>

    </div>

  </body>
</html>
