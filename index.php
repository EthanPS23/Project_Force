<?php
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

    <?php include "templates/carousel.php"; ?>

    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
