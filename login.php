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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mainStyle.css">
    <link rel="stylesheet" href="login.css">
    
    <!-- Login page JS -->
    <script src="stylejs.js"></script>
    <script src="registration.js"></script>
    <title>Login</title>
  </head>
  <body>
    <!-- Start registration page -->
    <?php include("templates/header.php"); ?>
    <div class="container">
      <p>Enter User ID and Password</p>
        <!-- creates a form form a user to enter in their username and password to sign in -->
        <form action="verifyLogin.php" method="post" id="form1">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="UserId">User ID: </label>
              <input type="text" name="UserId" id="UserId" class="form-control" placeholder="User ID" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Password">Password: </label>
              <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" required>
            </div>
          </div>
          <!-- Submit and reset buttons-->
          <span>
            Don't have an account?
            <a href="Register_Page.php">Register here.</a>
          </span><br>

          <input type="submit" class="btn-primary btn-lg" value="Log-In" />
					<input type="reset" class="btn-info btn-sm" onclick="return confirm('Do you really want to reset?');" />
        </form>
    </div>

    <!-- shows a warning to the customer -->
    <p class="warningText">
      <?php
        if (isset($_SESSION["message"])) {
          print($_SESSION["message"]);
          $_SESSION["message"] = "";
        }
      ?>
    </p>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
