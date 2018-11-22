<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link rel="stylesheet" href="../assets/css/nav.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- <nav class="nav-style">
      <ul class="nav justify-content-center">
        <li class="nav-item padding">
          <a class="nav-link active link" href="Website/index.html">Home</a>
        </li>
        <li class="nav-item padding">
          <a class="nav-link link" href="#">test</a>
        </li>
        <li class="nav-item padding">
          <a class="nav-link link" href="#">test</a>
        </li>
      </ul>
    </nav> -->

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
      </nav>
    </div>

    <div class="container-fluid" style="padding-top: 3%">

      <div class="row row-padding">

        <div class="col-lg-6" align="center">
            <img class="item-detail-img" src="">
        </div>

        <div class="col-lg-6">
          <h5>Item Name</h5>
          <hr style="margin-top: 10px; margin-bottom: 10px;">
          <p class="desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <hr style="margin-top: 10px; margin-bottom: 10px;">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Price:</label>
            <div class="col-sm-4">
              <p class="price">R 100</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Quantity:</label>
            <div class="col-sm-4">
              <input type="number" name="quantity" value="1" min="1" class="form-control" />
            </div>
            <div class="col-sm-4">
              <p>kg</p>
            </div>
          </div>
          <br>
          <input type="submit" value="Add to Cart" id="button" class="btn btn-primary" name="add_to_cart">
        </div>


      </div>
    </div>

    </div>

  </body>
</html>
