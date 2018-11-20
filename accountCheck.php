<?php
  session_cache_expire(30);
  session_start();

  if(!isset($_SESSION["logged-in"]) || !$_SESSION["logged-in"]){
    $_SESSION["returnPage"] = "index.php";
    header("Location: login.php");
  }
  else{
    unset($_SESSION["logged-in"]);
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>logCheck</title>
  </head>
  <body>
    <?php
      if(isset($_Session["message"])){
        print("<p>".$_SESSION["message"]."</p>");
        $_SESSION["message"] = "";
      }
    ?>
    <p>"Some Text"</p>
  </body>
</html>
