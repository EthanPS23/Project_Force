<?php
	include_once("Customer.php");
	include_once("functions.php");
	session_start();
	//receive form data from register page
	//$customer = ($_REQUEST);
	//$customer = array();
	
	// put $_REQUEST array into Agent class in the appropriate spots
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

//insert $agents array to the insertagents function
	if (isset($_REQUEST["CustFirstName"]))
	{
		//validate the form data
		//if data is okay
		//pass array to insertagent() function
		if (insertcustomer($_REQUEST))
		{
			print("Data inserted successfully");
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
