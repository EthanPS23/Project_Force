<?php
	include_once("Customer.php");
	include_once('Package.php');
/* setting cache expire time  */
    session_cache_expire(30);
    session_start();
	$_SESSION["returnPage"] = "index.php";
/* checks whether the session is logged in and returns to login.php if session is not logged-in */
    if (!isset($_SESSION["logged-in"]) || !$_SESSION["logged-in"]){
        header("Location: login.php");
	}
	elseif (!isset($_SESSION["package"]) || !isset($_SESSION["customer"]))
	{
		header("Location: packages.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="packageregstyle.css">
    <link rel="stylesheet" href="mainStyle.css">
    <title>Package Registration</title>
</head>
<body>
	<div id="wrap">
	<!-- Start Registraion Page -->
	<title><?php print($pageTitle); ?></title>
	<?php include("templates/header.php") ?>
	<div class="container">

	<?php

		if(!isset($_SESSION['package'])){
			echo 'Data was not gathered';
		}
		else{
			$packArray =  $_SESSION['package'];
			$selected = $packArray[$_GET["index"]];
			$_SESSION['PackageId']=$selected;
			//echo $_SESSION['PackageId']+2 . " Added two to the number " . $_SESSION['PackageId'] . " showing that it is a number";
		}

		$PkgName=$selected->getPkgName();
		$startDate=$selected->getStartDate();
		$endDate=$selected->getEndDate();
		$description=$selected->getDescription();
		$basePrice=$selected->getBasePrice();
		$commission=$selected->getCommission();
		$ImgLink=$selected->getImgLink();
		

        // creates a card and when clicked would go to the package, purchase page
        print("<div class='box'>");
                
        // displays ab image based on and image location received from the database
        print("<div class='imgbx'>");
        print("<img src='$ImgLink' alt='$PkgName' class='flex-container'>");
        print("</div>");
        // prints out the package name
        print("<div class='content'>");
        print("<h2>$PkgName</h2>");
        // prints out the package price
        print("<div class='prices'>$" . round($basePrice, 2 ) . ".00</div>");
        // prints out the package start and end dates
        $date1=substr($startDate,0,-9);
        $date2=substr($endDate,0,-9);

        // if the start date is less than the current date then the date is turned red and crossed out
        if((time()-(60*60*24)) < strtotime($date1)){
            print("<div class='dates'>$date1 to $date2</div>");
        }
        else{
            print("<div class='dates' style='color:red; text-decoration: line-through;'>$date1 to $date2</div>");
        }
        // prints out the package description
        print("<p>$description</p>");
        print("</div>");
                
        print("</div>");
	
		
	?>
		<form id="form1" method="get" action="bookingInsert.php">
			<!-- Number of travellers -->
			<div class="form-row justify-content-center">
				<div class="form-group col-md-2">
					<label for="numTravellers">Number of Travellers</label>
					<input type="number" id="numTravellers" name="numTravellers" class="form-control" placeholder="1" min="1">

					<input type="submit" class="btn-primary btn-lg" onclick="return validate(this.form);" value="Book Package" />
					<input type="reset" class="btn-info btn-sm" onclick="return confirm('Do you really want to reset?');" value="Reset"/>
				</div>
			</div>	
		</form>
	</div>
	</div>
	<?php include("templates/footer.php"); ?>
</body>

</html>