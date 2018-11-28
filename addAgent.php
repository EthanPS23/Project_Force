<?php
  //functions.php used to connect to database and use insertAgent function
  include("functions.php");
  $dbh = dbconnect();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<link rel="stylesheet" href="mainStyle.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="addAgent.js"></script>
    <title>New Agent</title>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Enter a New Agent</h1>
    </div>
    <?php include("templates/header.php")?>
    <form class="container" method="post" action="addAgent.php">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <h1> Agent Information </h1>
            <p id="message"></p>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="AgtFirstName"> First Name </label>
          <input type="text" id="AgtFirstName" class="form-control" name="AgtFirstName" placeholder="First name">
        </div>
        <div class="form-group col-md-2">
          <label for="AgtMiddleInitial">Middle Name Initial(s)</label>
          <input type="text" class="form-control" name="AgtMiddleInitial" id="AgtMiddleInitial" placeholder="Middle Initial"/>
        </div>
        <div class="form-group col-md-5">
          <label for="AgtLastName"> Last Name </label>
          <input type="text" id="AgtLastName" class="form-control" name="AgtLastName" placeholder="Last name"/>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="AgtBusPhone">Business Phone</label>
          <input type="text" id="AgtBusPhone" class="form-control" name="AgtBusPhone" placeholder="(999) 999-9999">
        </div>
        <div class="form-group col-md-6">
          <label for="AgtEmail"> e-mail </label>
          <input type="email" id="AgtEmail" class="form-control" name="AgtEmail" placeholder="Email"
            onfocus="tipAgtEmail.style.visibility = 'visible'"
            onblur="tipAgtEmail.style.visibility = 'hidden'"/>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="AgtPosition">Agent Position</label>
          <select id="AgtPosition" class="form-control" name="AgtPosition">
  					<option value="">Select agent position</option>
  					<option value="Jr">Junior Agent</option>
  					<option value="Itm">Intermediate Agent</option>
  					<option value="Sr">Senior Agent</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="AgencyId"> Agency </label>
          <select class="form-control" id="AgencyId" name="AgencyId">
            <option selected value="">Select Agency</option>
            <?php
              $sql = "SELECT `AgencyId` FROM `agencies`";
              $result = mysqli_query($dbh, $sql);
              if (!$result){
                echo "Unable to process request, call tech support";
                exit();
              }
              //get the values from the database
              while ($row = mysqli_fetch_row($result)){
                print ("<option value='$row[0]'>$row[0]</option>");
              }
            ?>
          </select>
        </div>
      </div>
      <!--Confirm or cancel form -->
      <div class="form-row justify-content-around">
        <div class="form-group col-md-2">
          <input type="submit" class="btn-primary btn-lg" value="Submit" onclick="return validate(this.form);" />
        </div>
        <div class="form-group col-md-2">
          <input type="reset"class="btn-secondary btn-sm" value="Cancel" onclick="return confirm('Do you really want to cancel?');" />
        </div>
      </div>
    </form>

  </body>
</html>
