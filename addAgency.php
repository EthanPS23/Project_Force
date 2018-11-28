<?php
  //functions.php used to connect to database and use insertAgency function
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
    <title>New Agency</title>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Enter a New Agency</h1>
    </div>
    <?php include("templates/header.php")?>
    <form class="container" method="post" action="addAgency.php">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <h1> Agency Information </h1>
            <p id="message"></p>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="AgncyAddress"> Agency Address </label>
          <input type="text" id="AgncyAddress" class="form-control" name="AgncyAddress" placeholder="Address">
        </div>
        <div class="form-group col-md-3">
          <label for="AgncyCity">City</label>
          <input type="text" class="form-control" name="AgncyCity" id="AgncyCity" placeholder="City"/>
        </div>
        <div class="form-group col-md-2">
          <label for="AgncyProv">Province/Territor</label>
				  <select id="AgncyProv" class="form-control" name="AgncyProv">
  					<option value="">Select a province/territory</option>
  					<option value="ab">AB</option>
  					<option value="bc">BC</option>
  					<option value="mb">MB</option>
  					<option value="nb">NB</option>
  					<option value="nl">NL</option>
  					<option value="nt">NT</option>
  					<option value="ns">NS</option>
  					<option value="nu">NU</option>
  					<option value="on">ON</option>
  					<option value="pe">PE</option>
  					<option value="qc">QC</option>
  					<option value="sk">SK</option>
  					<option value="yk">YK</option>
				  </select>
        </div>
        <div class="form-group col-md-2">
          <label for="AgncyPostal">Postal Code</label>
          <input type="text" class="form-control" name="AgncyPostal" id="AgncyPostal" placeholder="Postal Code"/>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="AgncyPhone">Agency Phone</label>
          <input type="text" id="AgncyPhone" class="form-control" name="AgncyPhone" placeholder="(999) 999-9999">
        </div>
        <div class="form-group col-md-6">
          <label for="AgncyFax">Agency Fax</label>
          <input type="text" id="AgncyFax" class="form-control" name="AgncyFax" placeholder="(999) 999-9999">
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
