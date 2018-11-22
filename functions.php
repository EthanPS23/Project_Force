<?php

  function dbconnect(){
    $dbh = mysqli_connect("localhost", "harv", "password", "travelexperts");
    if (!$dbh){
      echo "Connection to database failed. Call tech support";
      exit();
    }
    return $dbh;
   }

  function insertAgent($agent){
    $sql = "INSERT INTO `agents`(`AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`,
    `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (?,?,?,?,?,?,?)";
    $dbh = dbconnect();
    if (!$dbh){
      print("Connection erro:" . mysqli_connect_errno() . "----" . mysqli_connect_error() . "<br />");
      exit();
    }

    $stmt = mysqli_prepare($dbh, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi",$agent["AgtFirstName"],
      $agent["AgtMiddleInitial"],$agent["AgtLastName"],$agent["AgtBusPhone"],
      $agent["AgtEmail"],$agent["AgtPosition"],$agent["AgencyId"]);

    $result = mysqli_stmt_execute($stmt);
    if (!$result){
      print(mysqli_stmt_error());
      mysqli_close($dbh);
      return false;
    }
    mysqli_close($dbh);
    return true;
  }
?>
