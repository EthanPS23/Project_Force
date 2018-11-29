<?PHP
	include_once("Customer.php");
	include_once("Package.php");
	include_once("functions.php");
	session_start();

	if (isset($_REQUEST["numTravellers"]))
	{
		//validate the form data
		//if data is okay
		//pass array to insertBooking() function
		//echo $_SESSION['PackageId'];
		$insertBooking = insertBooking($_REQUEST["numTravellers"], $_SESSION["customer"]->getCustomerId(), $_SESSION["PackageId"]->getPackageId());
		if ($insertBooking)
		{
			$_SESSION["bookingsuccess"]= true;
			header("Location: packages.php");
		}
		else
		{
			print("Data insert failed, call tech support");
		}
	}
	else
	{
		print("no form data recieved");
		//header("Location: packagereg.php");
	}

?>