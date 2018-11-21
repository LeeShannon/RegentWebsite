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
              <a href="#">test</a>
            </li>
            <li >
              <a href="#">test</a>
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

    <div class="container-fluid">
      <h2>shopping cart</h2>
      <form class="" action="checkout.php" method="post">
          <div class="col-lg-12 table-responsive">
            <table class="table items-table">
              <thead class="thead-style">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">Total</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="static">
                    <img class="item-cart" style="object-fit: cover" src="" >
                  </td>
                  <td> name </td>
                  <td style="width: 200px">

                    <div class="form-group row">
                      <div class="col-sm-7">
                        <input type="number" name="quantity" value="1" placeholder="100" min="1" class="form-control" />
                      </div>
                        <p>box</p>
                    </div>

                  </td>
                  <td>R 100</td>
                  <td>
                    R 100
                  </td>
                  <td>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Remove">
                     <i class="fas fa-times-circle" style="color: black; font-size: 25px"></i>
                   </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="container-fluid" style="margin-bottom: 3%;">
            <hr>

                <div class="form-group row" style="padding-left: 3%">
                  <!-- <div class="col-sm-2"> -->
                    <label for="exampleFormControlSelect1" style="padding-top: 6px">Shipping Company:</label>
                  <!-- </div> -->
                  <div class="col-sm-2">
                    <select name="shippingCompany" class="form-control" id="exampleFormControlSelect1">
                      <option>DHL</option>
                      <option>Turner's Shipping</option>
                      <option>Another one</option>
                    </select>
                  </div>
                </div>

            <div class="row">
              <div class="col-md-6">
                <h2 style="padding-left: 2%; font-size: 20px;">Total: R 100</h2>
              </div>
              <div class="col-md-6 d-flex justify-content-end">
                <input type="submit" name="checkout" value="Proceed to Checkout" id="button" class="btn btn-default">
              </div>
            </div>
          </div>
        </form>
        </div>
    </div>

    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

  </body>
</html>
