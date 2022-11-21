<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asets/css/style.css">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
          <img class="logo" src="asets/imgs/ferdyshop.png" width="65.5" alt=" ">
          <H2 class="brand">Ferdy Shop</H2>
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

              <li class="nav-item">
                <a class="nav-link" href="login1.php">Login</a>
              </li>

              <li>
                <a href="card.php"><i class="fas fa-shopping-bag" data-fa-transform="down-3 grow-6"></i></a>
                <a href="account.php"><i class="fas fa-user" data-fa-transform="down-6 grow-6"></i></a>
             </li>

            </ul>
          </div>
        </div>
      </nav>



      <!--Best Price-->
      <section id="home">
        <div class="container">
          <h5>NEW ARRIVAL</h5>
          <h1><span>Best Price</span>This Season</h1>
          <p>E-Shop offers the best product fot the most affordable price</p>
          <button>Shop Now</button>
        </div>
      </section>

      <!--Brand-->
      <section id="brand" class="container">
        <div class="row">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
      src="asets/imgs/logo faith.png" alt="">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
      src="asets/imgs/logo faith.png" alt="">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
      src="asets/imgs/logo faith.png" alt="">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12"
      src="asets/imgs/logo faith.png" alt="">
        </div>
      </section>
      <br>
      
      <!--New-->
      <section id="new" class="w-100">
        <div class="row  p-0 m-0">
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="asets/imgs/baju mistilltein seed.jpg" alt="">
            <div class="details">
              <h2>Extremly Awesome Tshirt</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="asets/imgs/baju magic.png" alt="">
            <div class="details">
              <h2>Awesome Tshirt</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="asets/imgs/baju black swordsman.jpg" alt="">
            <div class="details">
              <h2>50% OFF Tshirt</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
        </div>
      </section>
      <section id="featured">
        <div class="container text-center mt-5 py-5">;
          <h3>Our Featured Tshirt</h3>
          <hr>
          <p>Here you can check out our featured product</p>
        </div>
        </section>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju adamantite hero.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Adamantite Hero" Tshirt </h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju cake murder.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Oversize Tshirt "Cake Murder"</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju nazarick servant.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Nazarick Servant" Tshirt</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju 4 men crew.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Tshirt "4 Men Crew"</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>

      <section id="banner" class="my-5 pb-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>Autumn Collection <br> Up to 30% OFF</h1>
          <button class="text-uppercase">Shop Now</button>  
        </div>
      </section>
      <section id="featured">
        <div class="container text-center mt-5 py-5">;
          <h3>New Best Tshirt</h3>
          <hr>
          <p>Here you can check out our featured product</p>
        </div>
        </section>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju mad dog of shimano.png" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Tshirt "Mad Dog of Shimano"</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju heavenly hand of defense.png" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Tshirt "Heavenly Hand of Defense" </h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju dragon of dojima.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Tshirt "Dragon of Dojima" </h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju the rock bottom dragon.png" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Tshirt "The Rock Bottom Dragon"</h5>
            <h4 class="p-price">$199.8</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>
      <section id="featured">
        <div class="container text-center mt-5 py-5">;
          <h3>Best Of Varsity Jacket</h3>
          <hr>
          <p>Here you can check out our featured product</p>
        </div>
        </section>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/Varsity Jacket Harley The Fester.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Varsity Jacket Harley The Fester </h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/varsity jacket fenix the hellow.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Fenix the Hollow" Varsity Jacket</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/varsity jacket heisenberg the ferocious.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Varsity Jacket "Heisenberg The Ferocious"</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/varsity jacket dragon of dojima.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries Varsity Jacket "Dragon of Dojima"</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>
      <section id="featured">
        <div class="container text-center mt-5 py-5">;
          <h3>Best Tshirt</h3>
          <hr>
          <p>Here you can check out our featured product</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju malenia.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Malenia" Tshirt</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju godfrey.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Godfrey" Tshirt </h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju radhan.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Radhan" Tshirt</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3"
            src="asets/imgs/baju tree sentinel.jpg" alt="">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <h5 class="p-name">Faith Industries "Tree Sentinel" Tshirt</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
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