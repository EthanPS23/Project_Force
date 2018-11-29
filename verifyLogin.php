<?php
    session_start();
	include_once("Customer.php");
  if(!isset($_REQUEST["UserId"])){
    $_SESSION["message"] = "User ID and Password are Required";
    header("Location: login.php");
  }
  elseif(isset($_SEESION["agent"])) {
    unset($_SESSION["agent"]);
    header("Location: index.php");
  }

  $dbh = mysqli_connect("localhost","harv","password","travelexperts");
  if(mysqli_connect_errno()){
    die("Error: ".mysqli_connect_error()."!!!");
  }

/*set autocommit to off*/
  mysqli_autocommit($dbh, FALSE);

  /*queries to select values*/
  $sql = "select CustomerId, CustUserId, CustPassword from customers where CustUserId=?";
  $sql2 = "select AgentId, AgtPassword from agents where AgentId=?";


  $stmt = mysqli_prepare($dbh, $sql);
  $stmt2 = mysqli_prepare($dbh, $sql2);

  $var1 = $_REQUEST["UserId"];
  $var2 = $_REQUEST["UserId"];

  if(!mysqli_stmt_bind_param($stmt, "s", $var1)){
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
  $check = false;

  $result = mysqli_stmt_get_result($stmt);
  if(($resultArray = mysqli_fetch_array($result)) && (password_verify($_REQUEST["Password"], $resultArray[2]))) {
    $var = new Customer($resultArray);
	$_SESSION["customer"] = $var;
	$_SESSION["logged-in"] = true;
    $_SESSION["last_active"] = time();
    $returnPage = $_SESSION["returnPage"];
    unset($_SESSION["returnPage"]);
    mysqli_close($dbh);
    header("Location: $returnPage");
    $check = true;
  }

  //close first query
  mysqli_stmt_close($stmt);

  mysqli_stmt_bind_param($stmt2, "s", $var2);
  //execute second statement
  mysqli_stmt_execute($stmt2);
  $result2 = mysqli_stmt_get_result($stmt2);

  //password_verify($_REQUEST["CustPassword"], $password[0] == $_REQUEST["CustPassword"]);
  //&& (password_verify($_REQUEST["Password"], $resultArray2[1]))
  if(($resultArray2 = mysqli_fetch_array($result2)) && (password_verify($_REQUEST["Password"], $resultArray2[1])))
  {
    $_SESSION["agent"]=true;
    header("Location: agtDashboard.php");
    $check = true;
  }

  mysqli_stmt_close($stmt2);


  if($check == false){
    $_SESSION["message"] .= " User Id or Password Incorrect";
    mysqli_close($dbh);
    header("Location: login.php");
  }
?>
