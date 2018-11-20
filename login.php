<?php
//login would usually use a secure socket layer (https)
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mainStyle.css">
    <title>Login</title>
  </head>
  <body>
    <p>Enter User ID and Password</p>
    <form action="verifyLogin.php" method="post">
      User ID: <input type="text" name="UserId" required><br>
      Password: <input type="password" name="Password" required><br>
      <input type="submit" value="Log-In">
    </form>
    <p class="warningText">
      <?php
        if (isset($_SESSION["message"])) {
          print($_SESSION["message"]);
          $_SESSION["message"] = "";
        }
      ?>
    </p>
  </body>
</html>
