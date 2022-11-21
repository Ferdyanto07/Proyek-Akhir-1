<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asets/css/style.css">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
          <img class="logo" src="asets/imgs/ferdyshop.png" width="60.5" alt=" ">
          <h2 class="brand">Ferdy Shop</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="halaman_crudF.php">Data Produk</a>
              </li>

              <li>
              <a href="card.php"><i class="fas fa-shopping-bag fa-lg" data-fa-transform="down-3 grow-3"></i></a>
              <a href="account.php"><i class="fas fa-user fa-lg" data-fa-transform="down-9 grow-3"></i></a>
              </li>

            </ul>
          </div>
        </div>
      </nav>





      <!--Account-->
      <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
                <h3 class="font-weight-bold">Account Info</h3>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>Name : <span>Ferdy Shop</span></p>
                    <p>Email : <span>ferdiyanto2288@gmail.com</span></p>
                    <p><a href="" id="order-btn">Your Order</a></p>
                    <p><a href="" id="logout-btn">Logout</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form id="account-form">
                    <h3>Change Password</h3>
                    <hr class="mx-auto">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="account-password" name="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <label>Confirm Online</label>
                        <input type="password" class="form-control" id="account-password" name="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Change password" class="btn" id="change-pass-btn"/>
                    </div>
                </form>
            </div>
      </section>

      <!--Orders-->
      <section class="cart container my-5 py-3">
        <div class="container mt-2">
          <h2 class="font-weight-bolde text-center">Your Orders</h2>
          <hr class="mx-auto">
        </div>
        <table class="mt-5 pt-5">
          <tr>
            <th>Product</th>
            <th>Date</th>
          </tr>
          <tr>
            <td>
                <div class="product-info">
                    <img src="asets/imgs/baju mistilltein seed.jpg"width="50.50px alt=">
                    <div>
                        <p>Faith Industries Tshirt "Mistiltein Seed" </p>
                        <small><span>$</span>199.8</small>
                        <br>
                        <a class="remove-btn" hrref="#">Remove</a>
                    </div>
                </div>
            </td>
            <td>
                <input type="number" value="1">
                <a class="edit-btn" href="#">Edit</a>
            </td>

            <td>
                <span>$</span>
                <span class="product-price">199.8</span>
            </td>
          </tr>
        </table>

        <div class="cart-total">
          <table>
            <tr>
              <td>Subtotal</td>
              <td>$199.8</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>$199.8</td>
            </tr>
          </table>
        </div>
        <div class="checkout-container">
          <button class="btn checkout-btn">Checkout</button>
        </div>
      </section>
      
      <!--Footer-->
      <footer class="mt-5 py-5">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <img src="asets/imgs/ferdyshop.png" class="logo" style="width: 150px;">
              <p>We Provide The Best Products For The Most Affordable Prices</p>
            </div>
            <div class="col-sm">
              <h5 class="pb-2">Featured</h5>
              <ul class="text-uppercase">
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Boys</a></li>
                <li><a href="#">Girls</a></li>
                <li><a href="#">New Arrival</a></li>
                <li><a href="#">Clotches</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h5 class="pb-2">Contact Us</h5>
              <div>
                <h6 class="text-uppercase">Address</h6>
                <p>Bengkong Mahkota</p>
              </div>
              <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>08994858095</p>
              </div>
              <div>
                <h6 class="text-uppercase">Email</h6>
                <p>ferdiyanto2288@gmail.com</p>
              </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Instagram</h5>
              <div class="row">
                <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2" alt="">
                <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2" alt="">
              </div>
            </div>
              <div class="copyright mt-5">
                <div class="row container mx-auto">
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="asets/imgs/visa-logo.jpeg" class="logo" style="width: 150px;">
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <p>eCormmerce @ 2022 All Right Reversed</p>
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
              </div>
          </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>