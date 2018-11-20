<?php
    $pageArray = array("Home" => "index.php", "Register" => "Register_Page.php", "Contact" => "Contact_Us.php");
?>
<script src="mainJava.js"></script>
<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
  <a class="navbar-brand" href="index.php">
   <img src="images/logo.png" alt="Logo" style="width:40px;">
  </a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <?php
        if(!isset($pageName)){
          $pageName = "";
        }
        foreach ($pageArray as $name => $url) {
          print("<li class=\"nav-item ");
          if($pageName == $name){
            print("active");
          }
          print("\" onmouseover=\"changeColorG(this)\" onmouseout=\"defaultColor(this)\"><a class=\"nav-link\" href=\"$url\">".$name."</a></li>");
        }
      ?>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" onmouseover="changeColorG(this)" onmouseout="defaultColor(this)"><a class="nav-link" href="#"></span> Sign In</a></li>
    </ul>
  </div>
</nav>
