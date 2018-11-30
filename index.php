<?php
//Page creation by: Yosuke Saito and Mo Sagnia
  session_start();
  $pageName = "Home";
  $pageTitle = "Main Page";
  $_SESSION["returnPage"] = "index.php";
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
    <div id="wrap">
      <div class="jumbotron jumbotron-fluid">
		<div class="container text-white">
          <h1>Welcome to Travel Experts</h1>
        </div>
      </div>
      <?php include("templates/header.php"); ?>

      <?php include "templates/carousel.php"; ?>


    <div>
      <div class="text-center" style="margin-top: 3%;">
        <h1>Here's what our customers say about us!</h1>
      </div>
      <div class="container" style="margin-top: 3%;">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <!-- style="width: 18rem;" -->
            <div class="card bg-primary" style="width: 18rem;">
              <img class="card-img-top img-circle imgDC" src="Images/Dwight.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Thanks Travel Experts</h5>
                <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-primary" style="width: 18rem;">
              <img class="card-img img-circle imgDC" src="Images/Scott.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Who knew booking was that easy?</h5>
                <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-primary" style="width: 18rem;">
              <img class="card-img rounded-circle imgDC" src="Images/hudson.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Awesome service!</h5>
                <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br/><br/>
    <?php include 'templates/footer.php'; ?>
  </body>

</html>
