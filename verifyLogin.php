<?php
    session_start();
  if(!isset($_REQUEST["UserId"])){
    $_SESSION["message"] = "User ID and Password are Required";
    header("Location: login.php");
  }

  $dbh = mysqli_connect("localhost","harv","password","travelexperts");
  if(mysqli_connect_errno()){
    die("Error: ".mysqli_connect_error()."!!!");
  }
  $sql = "select CustPassword from customers where CustUserId=?";
  //$sql2 = "select AgtPassword from agents where AgentId=?"; dont really need for scope of project
  $stmt = mysqli_prepare($dbh, $sql);
  if(!mysqli_stmt_bind_param($stmt, "s", $_REQUEST["UserId"])){
    $fh = fopen("errorlog.txt", "a");
    fwrite($fh, mysqli_errorno($stmt)." ");
    fwrite($fh, mysqli_stmt_error($stmt)."\n");
    fclose($fh);
    mysqli_close($dbh);
    $_SESSION["message"] = "Failed to connect to database";
    header("Location: login.php");
  }
  if(!mysqli_stmt_execute($stmt)){
    ///////should make snippet reusable
    $fh = fopen("errorlog.txt", "a");
    fwrite($fh, mysqli_errorno($stmt)." ");
    fwrite($fh, mysqli_stmt_error($stmt)."\n");
    fclose($fh);
    mysqli_close($dbh);
    $_SESSION["message"] = "Failed to connect to database";
    header("Location: login.php");
  }
  $result = mysqli_stmt_get_result($stmt);

  //password_verify($_REQUEST["CustPassword"], $password[0] == $_REQUEST["CustPassword"]);

  if(($password = mysqli_fetch_array($result)) && (password_verify($_REQUEST["Password"], $password[0]))){
    $_SESSION["logged-in"] = true;
    $_SESSION["last_active"] = time();
    $returnPage = $_SESSION["returnPage"];
    unset($_SESSION["returnPage"]);
    mysqli_close($dbh);
    header("Location: $returnPage");
  }
  else{
    $_SESSION["message"] = "User ID or Password is incorrect";
    mysqli_close($dbh);
    header("Location: login.php");
  }
?>
