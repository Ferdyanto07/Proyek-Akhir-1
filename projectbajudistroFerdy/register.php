<?php

require_once('helper1.php');
require_once('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v6.1.2/js/all.js" integrity="sha384-11X1bEJVFeFtn94r1jlvSC7tlJkV2VJctorjswdLzqOJ6ZvYBSZQkaQVXG0R4Flt" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asets/css/style.css">
</head>
<body>
    
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
      <div class="container">
        <img src="asets/imgs/ferdyshop.png" class='logo' width="44.5px" alt="">
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
              <a class="nav-link" href="contact.php">Contact us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="halaman_crudF.php">Data Produk</a>
            </li>

            <li>
              <a href="card.php"><i class="fas fa-shopping-bag fa-lg" data-fa-transform="down-6 grow-3"></i></a>
              <a href="account.php"><i class="fas fa-user fa-lg" data-fa-transform="down-6 grow-3"></i></a>
            </li>

            
          </ul>
        </div>
      </div>
    </nav>

<!--register-->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Register</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="register-form">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="register-name" name="Name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="register-email" name="Email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="register-password" name="Password" placeholder="Password" required>
            </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="register-btn" value="Register"/>
                    </div>
                    <div class="form-group">
                        <a id="register-url" class="btn">Do you have an account? Login</a>
                    </div>
                    </form>
                  </div>
                </section>
      
          <!--footer-->
          <footer class="mt-5 py-5">
            <div class="row">
              <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img  class="logo"src="asets/imgs/ferdyshop.png" style="width: 50px;">
                <p class="pt-3">We Provide The Best Products For The Most Affordable Prices</p>
              </div>
                <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                  <h5 class="pb-2">Featured</h5>
                  <ul class="text-uppercase">
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Boys</a></li>
                    <li><a href="#">Girls</a></li>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Clothes</a></li>
                  </ul>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-sm-12">
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
                  <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2">
                  <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2">
                  <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2">
                  <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2">
                  <img src="asets/imgs/instagramfooter.png" class="img-fluid w-25 h-100 m-2">
                </div>
              </div>
            </div>
            <div class="copyright mt-5">
              <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <img src="asets/imgs/visa-logo.jpeg" style="width: 80px; top: 9px; position: relative;">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <p>eCommerce @ 2022 All Rights Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <a href="#"><i class="fab fa-facebook fa-lg" style="position:relative; top:9px;"></i></a>
                  <a href="#"><i class="fab fa-instagram fa-lg" style="position:relative; top:9px;"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-lg" style="position:relative; top:9px;"></i></a>
                </div>
              </div>
            </div>
          </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>