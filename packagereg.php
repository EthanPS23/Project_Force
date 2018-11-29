<!DOCTYPE html>
<?PHP
include_once("Customer.php");
include_once("Package.php");

	session_start();
	if (!isset($_SESSION["logged-in"]))
	{
		header("Location: index.php");
	}
	elseif (!isset($_SESSION["package"]) || !isset($_SESSION["customer"]))
	{
		echo $_SESSION["customer"]->getCustomerId();
		echo $_SESSION["package"]->getPackageId();
		//header("Location: packages.php");
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mainStyle.css">
    <link rel="stylesheet" href="login.css">
    <title>Package Registration</title>
</head>
<body>
	<!-- Start Registraion Page -->
	<div class="jumbotron text-center">
      <h1>Register with us!</h1>
    </div>

	<title><?php print($pageTitle); ?></title>
	<?php include("templates/header.php") ?>
	<div class="container">
		<form id="form1" method="get" action="bookingInsert.php">
			<!-- First and last name -->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="numTravellers">Number of Travellers</label>
					<input type="number" id="numTravellers" name="numTravellers" class="form-control" placeholder="1" min="1" required>
				</div>				
			</div>			
			<!-- Submit and reset buttons -->
			<div class="form-row">
					<input type="submit" class="btn-primary btn-lg" value="Book Package" />
			</div>
		</form>
	</div>
	<?php include("templates/footer.php"); ?>
</body>

</html>