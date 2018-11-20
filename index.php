<?php
  session_cache_expire(30);
  session_start();
  $pageName = "Home";
  $pageTitle = "Main Page";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mainStyle.css">
    <title>Main Page</title>
    <style>
    /*
    Forces image to be 100% width and not max width of 100%
    */
    .carousel-item .img-fluid {
      width:100%;
    }
    /*
    anchors are inline so you need ot make them block to go full width
    */
    .carousel-item a {
      display: block;
      width:100%;
    }
    </style>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>Welcome to Travel Experts</h1>
      </div>
    </div>
    <?php include("templates/header.php"); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <picture>
           <source srcset="CMS_Creative_164657191_Kingfisher.jpg" media="(min-width: 1400px)">
           <source srcset="https://dummyimage.com/1140x550/#007aeb/4196e5" media="(min-width: 769px)">
           <source srcset="https://dummyimage.com/800x550/007aeb/4196e5" media="(min-width: 577px)">
           <img srcset="https://dummyimage.com/600x550/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
          </picture>
          <div class="carousel-caption d-none d-md-block">
            <h5>First Slide</h5>
            <p>...</p>
          </div>
        </div>
        <div class="carousel-item">
            <a href="https://bootstrapcreative.com/">
              <picture>
                <source srcset="https://dummyimage.com/1600x550/#007aeb/4196e5" media="(min-width: 769px)">
                <img src="https://dummyimage.com/800x550/444/" alt="responsive image" class="d-block img-fluid">
              </picture>
              <div class="carousel-caption justify-content-center align-items-center">
                  <div>
                      <h2>Every project begins with a sketch</h2>
                      <p>We work as an extension of your business to explore solutions</p>
                      <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                  </div>
              </div>
            </a>
        </div>
        <div class="carousel-item">
          <picture>
             <source srcset="https://dummyimage.com/2000x550/007aeb/4196e5" media="(min-width: 1400px)">
             <source srcset="https://dummyimage.com/1400x550/#007aeb/4196e5" media="(min-width: 769px)">
              <source srcset="https://dummyimage.com/800x550/007aeb/4196e5" media="(min-width: 577px)">
             <img srcset="https://dummyimage.com/600x550/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
          </picture>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
