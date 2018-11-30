<?php
//Page creation by: Mo Sagnia
  include("functions.php");
  $dbh=dbconnect();
  session_start();

  if (insertAgent($_REQUEST))
  {
    header("Location: agtDashboard.php");
  }
  else
  {
    echo "Failed to add agent to database. Contact tech support";
  }
  ?>
