<!-- Packages page loads packages from the server and generates a packages card for each package being sold -->
<?php
    $dbh = mysqli_connect("localhost","harv","password","travelexperts");
    if(!$dbh){
        print("Connection failed: " .mysqli_connect_errno() . "--" .mysqli_connect_errno() . "<br>");
        exit();
    }
  $pageName = "Packages";
  $pageTitle = "Travel Packages";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php print($pageTitle); ?></title>
    <!-- Packages page style sheets and javascripts -->
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="mainStyle.css">
    <script src="stylejs.js"></script>
</head>
<body>
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
            // 
            while($row=mysqli_fetch_assoc($result)){

                $values=array_values($row);
                print("<form target=\"_self\" method=\"get\" action=\"packageregtest.php\">");
                // creates a card and when clicked would go to the package, purchase page
                print("<div class='box' onclick=\"window.location='Register_Page.php'\">");
                
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
                // prints out the package start and end dates
                $date1=substr($values[2],0,-9);
                $date2=substr($values[3],0,-9);
                
                // if the start date is less than the current date then the date is turned red and crossed out
                if((time()-(60*60*24)) < strtotime($date1)){
                    print("<div class='dates'>$date1 to $date2</div>");
                }
                else{
                    print("<div class='dates' style='color:red; text-decoration: line-through;'>$date1 to $date2</div>");
                }
                // prints out the package description
                print("<p>$values[4]</p>");
                print("</div>");
                
                print("</div>");
                print("</form>");
            }

        ?>
    </div>
    </div>
    <?php include("templates/footer.php"); ?>
</body>

</html>
