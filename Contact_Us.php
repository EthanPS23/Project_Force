<?php
  $pageName = "Contact";
  $pageTitle = "Contact US";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="mainStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Main Page</title>
  </head>
  <body>
      <?php include("templates/header.php") ?>
    <div class="container margintop">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h4>Travel Agency Company</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus voluptas, eum debitis nam sit fugit culpa quo placeat doloremque provident.</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="Images/contact_us.jpg" class="img-fluid maxwidth"alt="">
        </div>
      </div>
    </div>
    <div class="container margintop">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="Images/face.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">FirstName LastName</h4>
              <h5>Job Title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi praesentium omnis reprehenderit aliquam, minima fuga repellat ex molestias ducimus amet..</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="Images/face.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">FirstName LastName</h4>
              <h5>Job Title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum expedita animi eveniet molestias sunt nemo, inventore esse tempore magnam. Provident.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="Images/face.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">FirstName LastName</h4>
              <h5>Job Title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta earum asperiores placeat laudantium hic. Cupiditate quia velit, culpa dignissimos nihil..</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="Images/face.png" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">FirstName LastName</h4>
              <h5>Job Title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta earum asperiores placeat laudantium hic. Cupiditate quia velit, culpa dignissimos nihil..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="container-fluid">
      <div class="row justify-content-end">
          <div class="col-xs-2 footercol" id="facebook" onmouseover="changeColor(this)" onmouseout="defaultColor(this)">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook" style="font-size:30px;color:blue;"></i></a>
          </div>
          <div class="col-xs-2 footercol" id="twitter" onmouseover="changeColor(this)" onmouseout="defaultColor(this)">
            <a href="https://twitter.com/"><i class="fa fa-twitter" style="font-size:30px;color:blue;"></i></a>
          </div>
          <div class="col-xs-2 footercol" id="instagram" onmouseover="changeColor(this)" onmouseout="defaultColor(this)">
            <a href="https://www.instagram.com/"><i class="fa fa-instagram" style="font-size:30px;color:blue;"></i></a>
          </div>
          <div class="col-xs-2 footercol" id="linkedin" onmouseover="changeColor(this)" onmouseout="defaultColor(this)">
            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" style="font-size:30px;color:blue;"></i></a>
          </div>
      </div>
    </footer>
  </body>

</html>
