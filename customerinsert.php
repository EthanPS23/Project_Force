<?php
	include_once("Customer.php");
	include_once("functions.php");
	session_start();

$_REQUEST["CustPassword"] = password_hash($_REQUEST["CustPassword"], PASSWORD_DEFAULT);

	$customerObj = new Customer($_REQUEST);
		$_SESSION["custObj"] = $customerObj;
		
		/*$_REQUEST['CustFirstName'],
		$_REQUEST['CustLastName'],
		$_REQUEST['CustAddress'],
		$_REQUEST['CustCity'],
		$_REQUEST['CustProv'],
		$_REQUEST['CustPostal'],
		$_REQUEST['CustHomePhone'],
		$_REQUEST['CustBusPhone'],
		$_REQUEST['CustEmail'],
		$_REQUEST['CustUserId'],
		$_REQUEST['CustPassword']);
		*/


//insert $customer array to the insertcustomer function
	if (isset($_REQUEST["CustFirstName"]))
	{
		//validate the form data
		//if data is okay
		//pass array to insertagent() function
		$insertcust = insertcustomer($_REQUEST);
		if ($insertcust && isset($_SESSION["package"]))
		{
			$_SESSION["customer"] = $customerObj;
			$_SESSION["logged-in"] = true;
			header("Location: packagereg.php");
		}
		else if ($insertcust)
		{
			$_SESSION["logged-in"] = true;
			header("Location: verifyLogin.php");
		}
		else
		{
			print("Data insert failed, call tech support");
		}
	}
	else
	{
		//print("no form data recieved");
		header("Location: register.php");
	}
	

	
?>
