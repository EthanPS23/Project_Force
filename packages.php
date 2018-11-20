<?php
    $dbh = mysqli_connect("localhost","harv","password","travelexperts");
    if(!$dbh){
        print("Connection failed: " .mysqli_connect_errno() . "--" .mysqli_connect_errno() . "<br>");
        exit();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Travel Experts</title>
    <link rel="stylesheet" href="style.css">
    <script src="stylejs.js"></script>
</head>

<body>
    <!--<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="sidebar">
        <a href="#packages" class="active">Packages</a>
        <a href="indexyosuke.html">Index</a>
        <a href="Register_Page.php">Register</a>
        <a href="Contact_Us.html">Contact Us</a>
    </div>-->
    <!--<span style="font-size: 30px; cursor:pointer" class="Menu" onclick="openNav()">&#9776;Menu</span>-->
    <div class="main">
        <?php
            $sql="select * from packages";
            $result =mysqli_query($dbh, $sql);
            if(!$result){
                print("Query failed: " .mysqli_errno() . "--" . mysqli_error() . "<br>");
                exit();
            }
            $firstrow=true;
            while($row=mysqli_fetch_assoc($result)){
                //$keys=array_keys($row);
                $values=array_values($row);

                print("<div class='box' onclick=\"window.location='http://google.com'\">");    
                print("<div class='imgbx'>");
                print("<img src='$values[7]' alt='$values[1]' class='flex-container'>");
                print("</div>");
                print("<div class='content'>");
                print("<h2>$values[1]</h2>");
                print("<div class='prices'>$" . round($values[5], 2 ) . ".00</div>");
                $date1=substr($values[2],0,-9);
                $date2=substr($values[3],0,-9);

                if((time()-(60*60*24)) < strtotime($date1)){
                    print("<div class='dates'>$date1 to $date2</div>");
                }
                else{
                    print("<div class='dates' style='color:red; text-decoration: line-through;'>$date1 to $date2</div>");
                }

                print("<p>$values[4]</p>");
                print("</div>");               
                print("</div>");

                

                //print("$values[1]<br>");
                //print("$values[2]<br>");
            }

        ?>
        <!--<div class="box">
            <div class="imgbx">
                <div class="flex-container"></div>
            </div>
            <div class="content">
                <h2>Joshua Tree</h2>
                <div class="prices">$4800.00</div>  
                <div class="dates">2017-12-25 to 2018-01-04</div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur..
                </p>
            </div>
        </div>
        <br>-->
    </div>  
</body>

</html>