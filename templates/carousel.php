<?php
  $dbh = mysqli_connect("localhost","harv","password","travelexperts");
  if(!$dbh){
      print("Connection failed: ".mysqli_connect_errno()."--".mysqli_connect_errno()."<br>");
      exit();
  }
  $sql = "SELECT PkgName, PkgDesc, PkgImg FROM packages";
  $stmt = mysqli_prepare($dbh, $sql);
  $result = mysqli_query($dbh, $sql);
  if(!$result){
    print("CHAOOOS");
  }
?>
<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
  <div class="carousel-inner">
    <?php
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
      $values = array_values($row); //array of name, desc, img
      print("<div class='carousel-item ");
      if($i == 0){
        print("active");
        $i++;
      }
      print("'>
      <picture>
       <source srcset='".$values[2]."' media='(min-width: 769px)'>
       <img srcset='".$values[2]."' alt='responsive image' class='d-block img-fluid'>
       </picture>
       ");
      print("<div class='carousel-caption d-none d-md-block'>
        <h3>$values[0]</h3>
        <p>$values[1]</p>
      </div>
      </div>");
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
