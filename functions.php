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
  
  
  function insertcustomer($cust){
    $sql = "INSERT INTO `customers`(`CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `CustUserId`, `CustPassword`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $dbh = dbconnect();
    if (!$dbh){
      print("Connection erro:" . mysqli_connect_errno() . "----" . mysqli_connect_error() . "<br />");
      exit();
    }

    $stmt = mysqli_prepare($dbh, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssss", $cust["CustFirstName"], $cust["CustLastName"], $cust["CustAddress"], $cust["CustCity"], $cust["CustProv"], $cust["CustPostal"], $cust["CustHomePhone"], $cust["CustBusPhone"], $cust["CustEmail"], $cust["CustUserId"], $cust["CustPassword"]);

    $result = mysqli_stmt_execute($stmt);
    if (!$result){
      print(mysqli_stmt_error($stmt));
      mysqli_close($dbh);
      return false;
    }
    mysqli_close($dbh);
    return true;
  }
  
  function insertBooking($booking, $customer, $packageId){
    $sql = "INSERT INTO `bookings`(`BookingDate`, `TravelerCount`, `CustomerId`, `PackageId`) VALUES (?,?,?,?)";
    $dbh = dbconnect();
    if (!$dbh){
      print("Connection erro:" . mysqli_connect_errno() . "----" . mysqli_connect_error() . "<br />");
      exit();
    }
	$varDate = date("Y-m-j H:m:s");
    $stmt = mysqli_prepare($dbh, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $varDate, $booking, $customer, $packageId);

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
