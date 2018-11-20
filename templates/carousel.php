<?php
  $dbh = mysqli_connect("localhost","yosk","password","travelexperts");
  if(!$dbh){
      print("Connection failed: " .mysqli_connect_errno() . "--" .mysqli_connect_errno() . "<br>");
      exit();
  }
  $sql = "SELECT PkgName, PkgDesc, PkgImg FROM packages";
  $stmt = mysqli_prepare($dbh, $sql);
  $result = mysqli_query($dbh, $sql);
  if(!$result){
    print("CHAOOOS");
  }
/*
  print("<table>");
      $firstrow = true;
  while ($row = mysqli_fetch_assoc($result)) {
    print("<tr>");
    $values = array_values($row);
    foreach ($values as $value) {
      print("<td>$value</td>");
    }
    print("</tr>");
  }
  print("</table><br>");
  */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
  <div class="carousel-inner">
    <?php
    while($row = mysqli_fetch_assoc($result)){
      $values = array_values($row); //array of name, desc, img
      print("<div class='carousel-item active'>");
      print("
      <picture>
       <source srcset='../".$values[2]."' media='(min-width: 769px)'>
       <img srcset='".$values[2]." alt='responsive image' class='d-block img-fluid'>
       </picture>
       ");
      print("<div class='carousel-caption d-none d-md-block'>
        <h5>First Slide</h5>
        <p>...</p>
      </div>
      </div>");
    }
/*
    print("<div class='carousel-item active'>");
    print("<picture>
     <source srcset='../Images/Caribbean.jpg' media='(min-width: 769px)'>
     <img srcset='https://dummyimage.com/600x550/007aeb/4196e5' alt='responsive image' class='d-block img-fluid'>
    </picture>
    <div class='carousel-caption d-none d-md-block'>
      <h5>First Slide</h5>
      <p>...</p>
    </div>
    </div>");
*/
    ?>


    <div class="carousel-item active">
      <picture>
       <source srcset="Images/Caribbean.jpg" media="(min-width: 1400px)">
       <source srcset="Images/Caribbean.jpg" media="(min-width: 769px)">
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
