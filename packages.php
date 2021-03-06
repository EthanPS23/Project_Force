<!-- Packages page loads packages from the server and generates a packages card for each package being sold -->
<?php
//Page creation by: Ethan Shipley
  require('Package.php');
  session_start();
  $_SESSION["returnPage"] = "packagereg.php";
    $dbh = mysqli_connect("localhost","harv","password","travelexperts");
    if(!$dbh){
        print("Connection failed: " .mysqli_connect_errno() . "--" .mysqli_connect_errno() . "<br>");
        exit();
    }
  $pageName = "Packages";
  $pageTitle = "Travel Packages";
  $packages = array();
  $selectedPackage = "";

  if (isset($_SESSION["bookingsuccess"]))
  {
	echo("<script>alert('Booking Successful')</script>");
	unset($_SESSION["bookingsuccess"]);
  }

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php print($pageTitle); ?></title>
    <!-- Packages page style sheets and javascripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mainStyle.css">
    <script src="stylejs.js"></script>
    <script type="text/javascript">
      function setPackage(){
        sessionStorage.setItem("")
      }
    </script>
</head>
<body>

	<div class="jumbotron jumbotron-fluid">
		<div class="container text-white">
			<h1>Browse Packages</h1>
		</div>
	</div>

  <div id="wrap">
  <?php include("templates/header.php"); ?>
    <div class="main">
        <!-- packages are loaded into an array and displayed individually for each package -->
        <?php
            $sql="select * from packages";
            $result =mysqli_query($dbh, $sql);
            if(!$result){
                print("Query failed: " .mysqli_errno() . "--" . mysqli_error() . "<br>");
                exit();
            }
            $firstrow=true;
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                // var_dump($row[]);
                $values=array_values($row);
                // creates a card and when clicked would go to the package, purchase page

                // prints out the package start and end dates
                $date1 = substr($values[2],0,-9);
                $date2 = substr($values[3],0,-9);
                //check for expiry and remove onclick if expired
                $expired = (time()-(60*60*24)) >= strtotime($date1);
                if($expired){
                  print("<div class='box expired'>");
                }
                else{
                  print("<div class='box' onclick=\"window.location='packagereg.php?index=$i'\">");
                }
                //print("<div class='box'>");
                // displays ab image based on and image location received from the database
                print("<div class='imgbx'>");
                print("<img src='$values[7]' alt='$values[1]' class='flex-container'>");
                print("</div>");
                // prints out the package name
                print("<div class='content'>");
                print("<h2>$values[1]</h2>");
                // prints out the package price
                print("<div class='prices'>$" . round($values[5], 2 ) . ".00</div>");
                // if the start date is less than the current date then the date is turned red and crossed out
                if(!$expired){
                    print("<div class='dates'>$date1 to $date2</div>");
                }
                else{
                    print("<div class='dates' style='color:red; text-decoration: line-through;'>$date1 to $date2</div>");
                }
                // prints out the package description
                print("<p>$values[4]</p>");
                print("</div>");

                print("</div>");
                //print("</form>");
                $packages[] = new Package($values);
                $_SESSION['packages']=$packages;
                $i++;

            }


            //echo $_SESSION['pack']->getPkgName();

        ?>

    </div>
    </div>
    <?php include("templates/footer.php"); ?>
</body>

</html>
