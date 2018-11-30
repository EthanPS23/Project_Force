<?php
  $pageName = "Contact";
  $pageTitle = "Contact Us";
  include("functions.php");
  session_start();
  $_SESSION["returnPage"]="contactUs.php";

  $dbh= dbconnect();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="mainStyle.css">
    <style>
      <?php include('mainStyle.css');?>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Main Page</title>
  </head>
  <body>

  	<div class="jumbotron jumbotron-fluid">
		<div class="container text-white">
			<h1><?php echo $pageTitle ?></h1>
		</div>
	</div>

    <div id="wrap">
    <?php include("templates/header.php");
      #query number of agencies
      $sqlAgc = "SELECT `AgencyId` FROM `agencies`";
      $resultAgc = mysqli_query($dbh, $sqlAgc);
      //length of query (i.e.: num of rows)
      $AgcLength=mysqli_num_rows($resultAgc);

      #query number of agents
      $sqlAgt = "SELECT `AgtPosition` FROM `agents`";
      $resultAgt = mysqli_query($dbh,$sqlAgt);
      $data=array();
      while($row=mysqli_fetch_assoc($resultAgt))
      {
        $data[] = $row;
      }

      //fetch unique values in AgtPosition table, store it in an array that can be referenced
      $positionUnique = array_values(array_unique(array_column($data, 'AgtPosition')));
      //$positiontest = array_values($positionUnique);

      //remove spaces in $positionUnique values, store it an array that can be referenced (useful when looping for a unique identifier ie: "id")
      $positionUniqueNS = str_replace(" ", "", $positionUnique);
    ?>

    <!--Section to import and display all agencies-->
    <div class="container justify-content-center">
    <?php

      //set a looping variable "$j" that will define the maximum amount of cards
      //displayed in one row (when full screen), in this case 4.
      $j=0;
      for ($i=1; $i<=$AgcLength; $i++)
      {
        #Number of agencies in the company
        $sql = "SELECT `AgencyId`, `AgncyAddress`, `AgncyCity`, `AgncyProv`, `AgncyPostal`,
              `AgncyCountry`, `AgncyPhone`, `AgncyFax` FROM `agencies` WHERE `AgencyId` = $i";
        $result=mysqli_query($dbh, $sql);

        if (!$result)
        {
          echo "One or more request failed";
          exit();
        }
        while($row = mysqli_fetch_assoc($result))
        {
          if ($j%4==0)
          {
            //print the first row that will contain a maximum of 4 cards (i.e.: displaying 4 agencies)
            //if more than 4, another row containing a maximum of 4 cards will be printed and so on
            print ("<div class='card-deck' style='margin-top: 20px;'>");
          }
          print("<div class='card cardbkg'>
                  <img class='card-img-top' src='Images/logo.jpg' alt='Card image cap'>
                  <div class='card-body'>
                    <h5 class='card-title'>Agency Number " . $row['AgencyId'] . "</h5>
                    <p class='card-text'>Contact our <b>" . $row['AgncyCity'] .
                    "</b> office today for more info!</p>
                    <p>". $row['AgncyAddress'] . "<br />" . $row['AgncyCity'] . ", "
                    . $row['AgncyProv'] . ", " . $row['AgncyCountry'] . "<br />"
                    . $row['AgncyPostal'] . "</p>
                  </div>
                  <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><i class='fa fa-phone'></i> " .$row['AgncyPhone'] . "</li>
                    <li class='list-group-item'><i class='fa fa-fax'></i> ". $row['AgncyFax']."</li>
                    <li class='list-group-item'><p>Contact a travel agent directly!</p>");

          //loop through the various unique positions (in this case Junior/Intermediate/Senior Agent)
          for ($m=0; $m<count($positionUnique);$m++)
          {
            print("<a href='#collapse" . $positionUniqueNS[$m] . $i . "'class='btn btn-primary' data-toggle='collapse' role='button' aria-expanded='false' aria-controls='collapse".  $positionUniqueNS[$m] . $i . "'>" .  $positionUnique[$m] . "</br></a>");
          }
          print("</li></ul></div>");

          $j++;
          //if there are 4 cards printed in a row or if there are no more cards to be printed:
          if ($j%4==0 || $j==$AgcLength)
          {
            print("</div><br />");
          }
        }
      }
      ?>
    </div>
    <?php
      #Section to import and display agents according to their positions

      //loop through the number of agencies available
      for ($i=1; $i<=$AgcLength; $i++)
      {
        //variable $m used to loop through database to get the unique positions
        for ($m=0; $m<count($positionUniqueNS); $m++)
        {
          #agents in a given agency
          $sqlJr = "SELECT `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail` FROM `agents` WHERE `AgencyId`=$i AND `AgtPosition`='$positionUnique[$m]'";
          $resultJr=mysqli_query($dbh, $sqlJr);
          $JrLgth=mysqli_num_rows($resultJr);

          //variable $k used to have a maxiumum number of printed cards per row (in this case 4)
          $k=0;
          if (!$resultJr){
          echo "One or more request failed";
          exit();
          }
          while($rowJr = mysqli_fetch_assoc($resultJr))
          {
            if ($k==0)
            {
              print("<div class='card-deck collapse justify-content-center' id='collapse" . $positionUniqueNS[$m] . $i . "'>");
            }
            print("<div class='col-md-3 card collapse cardbkg text-center'>
                    <img class='imgDC' src='Images/obama.jpg' alt='Card image cap'>
                    <div class='card-body'>
                      <h5 class='card-title'>" . $rowJr['AgtFirstName'] . " " . $rowJr['AgtMiddleInitial'] . " " . $rowJr['AgtLastName'] . "</h5>
                      <p>" . $positionUnique[$m] . "</p>
                    </div>
                    <ul class='list-group list-group-flush listbkg'>
                      <li class='list-group-item'><i class='fa fa-phone'></i> " . $rowJr['AgtBusPhone'] . "</li>
                      <li class='list-group-item'><i class='fa fa-address-card'></i> " . $rowJr['AgtEmail'] ."</li>
                    </ul>
                   </div>");
            $k++;
            if($k%4==0 && $k!=$JrLgth)
            {
              print("</div>");
              print("<div class='card-deck collapse justify-content-center' style='margin-top: 20px;' id='collapse" . $positionUniqueNS[$m] . $i . "'>");
            }
            if($k==$JrLgth)
            {
              print("</div>");
            }
          }
        }
      }
    ?>
    </div>
    <br><br>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
