<?php
//Page creation by: Mo Sagnia
  include("functions.php");
  $dbh=dbconnect();
  session_start();

  if (insertAgency($_REQUEST))
  {
    header("Location: agtDashboard.php");
  }
  else
  {
    echo "Failed to add agency to database. Contact tech support";
  }
  ?>
