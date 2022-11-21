<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asets/css/style.css">
    <link rel="stylesheet" type="text/css" href="asets/css/style.css">
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
      <img src="asets/imgs/ferdyshop.png"width="65.5" alt="">
      <h2 class="brand">Ferdy Shop</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
            
          <li class="nav-item"></li>
            <a class="nav-link" href="index.php">Home</a>
            
            <li class="nav-item"></li>
            <a class="nav-link" href="shop.php">Shop</a>

            <li class="nav-item"></li>
            <a class="nav-link" href="blog.php">Blog</a>

            <li class="nav-item"></li>
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="halaman_crudF.php">Data Produk</a>
          </li>

          <li>
            <a href="card.php"><i class="fas fa-shopping-bag fa-lg" data-fa-transform="down-1 grow-3"></i></a>
            <a href="account.php"><i class="fas fa-user fa-lg" data-fa-transform="down-6 grow-3"></i></a>
          </li>
  
          
        </ul>
      </div>
    </div>
  </nav>

<!--Our Featured-->
<section id="featured" class="my-5 py-5">
    <div class="container mt-5 py-5">
      <h3>Our Featured Tshirt</h3>
      <hr>
      <p>Here you can check out our featured product</p>
    </div>
    </section>
    <div class="row mx-auto container">
      <div onclick="window.location.href='single_product.php';" class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3"
        src="asets/imgs/baju requim arrow.jpg" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries "Requiem Arrow" Tshirt</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
        <div onclick="window.location.href='single_product.php';" class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3"
        src="asets/imgs/baju god of the seven seas.png" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries Tshirt "God of The Seven Seas"</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div onclick="window.location.href='single_product.php';" class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3"
        src="asets/imgs/baju vento aureo.jpg" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries "Vento Aureo" Tshirt </h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
        <div onclick="window.location.href='single_product.php';" class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3"
        src="asets/imgs/baju the justice briger.png" alt="">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries Tshirt "The Justice Bringer" </h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      </section>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"
          src="asets/imgs/baju fly high.jpg" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <h5 class="p-name">"FLY HIGH" Tshirt </h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"
          src="asets/imgs/baju shohoku.jpg" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <h5 class="p-name">"SHOHOKU" Tshirt</h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"
          src="asets/imgs/baju harley the fester.jpg" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <h5 class="p-name">Faith Industries Tshirt "Harley" The Fester </h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3"
          src="asets/imgs/baju qurban sate kambing.jpg" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <h5 class="p-name">Faith Industries Qurban Series Tshirt - Sate Kambing</h5>
          <h4 class="p-price">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
          </section>
          <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"
              src="asets/imgs/baju bukan panitia qurban.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <h5 class="p-name">Faith Industries "Bukan Panitia Qurban" Tshirt</h5>
              <h4 class="p-price">$199.8</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"
              src="asets/imgs/baju prince of bosse kingdom.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <h5 class="p-name">Faith Industries Tshirt "Prince of Bosse Kingdom"</h5>
              <h4 class="p-price">$199.8</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"
              src="asets/imgs/baju galaxy fighter.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <h5 class="p-name">FTH x GOZEAL "Galaxy Fighter" Tshirt </h5>
              <h4 class="p-price">$199.8</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3"
              src="asets/imgs/baju digimon series.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <h5 class="p-name">Faith Industries Tshirt Digimon Series - Metal Seadramon</h5>
              <h4 class="p-price">$199.8</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination mt-5">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>

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
 