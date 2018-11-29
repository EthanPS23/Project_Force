<?php
  session_start();
  //functions.php used to connect to database and use insertAgent function
  include("functions.php");
  $dbh = dbconnect();
?>

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
    <script src="addAgent.js"></script>
    <script src="addAgency.js"></script>
    <title>Agent Dashboard</title>
  </head>
  <body id="bgAgtAgcy">
    <div class="divSpacing container row justify-content-around">
        <div class="col-md-4">
          <a href="index.php"> Travel Experts HomePage </a>
        </div>
        <div class="col-md-4">
          <a href="logout.php"> Logout </a>
        </div>
    </div>
    <div class="divSpacing container row justify-content-around">
      <div class="col-md-4 align-self-center">
        <a class="btn-lg btn-primary" data-toggle="collapse" href="#collapseAgcy" role="button" aria-expanded="false" aria-controls="collapseAgcy">
        Add Agency
        </a>
      </div>
      <div class="col-md-4 align-self-center">
        <a class="btn-lg btn-primary" data-toggle="collapse" href="#collapseAgt" role="button" aria-expanded="false" aria-controls="collapseAgt">
        Add Agent
        </a>
      </div>
    </div>
    <form class="divSpacing container collapse" method="post" action="insertAgency.php" id="collapseAgcy">
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
  					<option value="AB">AB</option>
  					<option value="BC">BC</option>
  					<option value="MB">MB</option>
  					<option value="NB">NB</option>
  					<option value="NL">NL</option>
  					<option value="NT">NT</option>
  					<option value="NS">NS</option>
  					<option value="NU">NU</option>
  					<option value="ON">ON</option>
  					<option value="PE">PE</option>
  					<option value="QC">QC</option>
  					<option value="SK">SK</option>
  					<option value="YK">YK</option>
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

    <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <!--Add Agent Form-->
    <form class="divSpacing container collapse" method="post" action="insertAgent.php" id="collapseAgt">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <h1> Agent Information </h1>
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
  					<option value="Junior Agent">Junior Agent</option>
  					<option value="Intermediate Agent">Intermediate Agent</option>
  					<option value="Senior Agent">Senior Agent</option>
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
          <input type="submit" class="btn-primary btn-lg" value="Submit" onclick="return validateAgt(this.form);" />
        </div>
        <div class="form-group col-md-2">
          <input type="reset"class="btn-secondary btn-sm" value="Cancel" onclick="return confirm('Do you really want to cancel?');" />
        </div>
      </div>
    </form>


  </body>
</html>
