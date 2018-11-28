<?PHP
	session_start();
	
	if (!isset($_SESSION["logged-in"]))
	{
		$_SESSION["returnPage"] = "packagereg.php";
		header("Location: login.php");
	}
	elseif (!isset($_SESSION["package"]))
	{
		header("Location: packages.php");
	}
	else
	{
		header("Location: packagereg.php");
	}
?>