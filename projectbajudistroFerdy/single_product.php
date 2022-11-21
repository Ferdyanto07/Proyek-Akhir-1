<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asets/css/style.css">
    <link rel="stylesheet" type="text/css" href="asets/css/all.min.css">
</head>
<body>
    
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
      <div class="container">
        <img src="asets/imgs/ferdyshop.png" class='logo' width="44.5px" alt="">
        <h2 class="brand">Ferdy SHOP</h2>
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


<!--Single product-->

    <section class="container single-product my-5 pt-5">
      <div class="row mt-5">
        <div class="col-lg-5 col-md-6 col-sm-12">
          <img class="img-fluid w-100 pb-1" id="mainImg" src="asets/imgs/baju black swordsman.jpg">
          <div class="small-img-group">
            <div class="small-img-col">
              <img class="small-img" width="100%" src="asets/imgs/baju magic.png">
            </div>
            <div class="small-img-col">
              <img class="small-img" width="100%" src="asets/imgs/baju malenia.jpg">
            </div>
            <div class="small-img-col">
              <img class="small-img" width="100%" src="asets/imgs/baju radhan.jpg">
            </div>
            <div class="small-img-col">
              <img class="small-img" width="100%" src="asets/imgs/baju tree sentinel.jpg">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <h6>MEN SHOES</h6>
          <h3 class="py-4">Men's Fashion</h3>
          <h2>155$</h2>
          <input class="input" type="number" value="1">
          <button class="buy-btn">Add To Cart</button>
          <h4 class="mt-5 mb-5">Product details</h4>
          <span>The Details Of Product Will Be Displayed Shortly <br>
          Condition: New <br>
          Unit Weight: 500 g <br>
          Category: Men's Shirt <br>
          Etalase: 23rd Issue <br><br>

          Sizing Measurement Tshirt : <br>
          (Length x Width) <br><br>

          Medium : 72 CM x 52 CM <br>
          Large : 74 CM x 54 CM <br>
          Extra Large : 76 CM x 56 CM <br>
          Double Extra Large : 78 CM x 58 CM <br><br>

          - Printed Tshirt<br>
          - Cotton Combed 24s<br>
          </span>
        </div>
      </div>
    </section>

<!-- Related product -->
<section id="related-product" class="my-5 pb-5">
  <div class="container text-center mt-5 py-5">
    <h3>Related Products</h3>
    <hr class="mx-auto">
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="asets/imgs/baju the justice briger.png">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries Tshirt "The Justice Bringer"</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="asets/imgs/Varsity Jacket Harley The Fester.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries Varsity Jacket Harley The Fester</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="asets/imgs/baju godfrey.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries "Godfrey" Tshirt</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="asets/imgs/varsity jacket heisenberg the ferocious.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">Faith Industries Varsity Jacket "Heisenberg The Ferocious"</h5>
        <h4 class="p-price">$199.8</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </div>
</section>

<!--Footer-->
  <footer class="mt-5 py-5">
    <div class="row">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img src="asets/imgs/ferdyshop.png" class="logo" style="width: 50px;">
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
          <img src="asets/imgs/visa-logo.jpeg">
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
  <script type="text/javascript">
    var mainImg=document.getElementById('mainImg');
    var smallImg=document.getElementsByClassName('small-img');

      smallImg[0].onclick=function () {
        mainImg.src=smallImg[0].src;
        }
      smallImg[1].onclick=function () {
        mainImg.src=smallImg[1].src;
        } 
      smallImg[2].onclick=function () {
        mainImg.src=smallImg[2].src;
        } 
      smallImg[3].onclick=function () {
        mainImg.src=smallImg[3].src;
        }

    // for(let i=0; i<4; i++){
    //   smallImg[1].onclick=function (){
    //     mainImg.src=smallImg[i].src;
    //   }
    // } 
  </script>
  </body>
  </html>