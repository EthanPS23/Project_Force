<?php
//list of all pages that are on nav bar
    $pageArray = array("Home" => "index.php", "Packages" => "packages.php" , "Register" => "registerPage.php", "Contact" => "contactUs.php");
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
      <li class="nav-item" onmouseover="changeColorG(this)" onmouseout="defaultColor(this)">
        <a class="nav-link" href="accountCheck.php">
          <?php
            if(!isset($_SESSION["logged-in"]) || !$_SESSION["logged-in"]){
              print("Sign In");
            }
            elseif(isset($_SESSION["logged-in"]) && (time() - $_SESSION["last_active"]) > 600){
              unset($_SESSION["logged-in"]);
              unset($_SESSION["last_active"]);
              print("Sign In");
            }
            else{
              $_SESSION["last_active"] = time();
              print("Sign Out");
            }
          ?>
        </a>
      </li>
    </ul>
  </div>
</nav>
