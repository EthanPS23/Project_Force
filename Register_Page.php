<?php
  $pageName = "Register";
  $pageTitle = "Register With Us";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="mainStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- Registration Page JS -->
	<script src="registration.js"></script>
	<title>Register Page</title>

<body>
	<div id="wrap">
	<!-- Start Registraion Page -->
	<div class="jumbotron text-center">
      <h1>Register with us!</h1>
    </div>

	<title><?php print($pageTitle); ?></title>

	<?php include("templates/header.php") ?>
	<div class="container">
		<h4>Enter your information below</h4>
		<p class="fieldhelp" id="f1"></p>
		<form id="form1" method="get" action="customerinsert.php">
			<!-- First and last name -->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="CustFirstName" style="font-weight: bold">First Name</label>
					<input type="text" id="CustFirstName" name="CustFirstName" class="form-control" placeholder="First name" onfocus="myFocus(this)" onblur="myBlur(this)">
				</div>
				<div class="form-group col-md-6">
					<label for="CustLastName" style="font-weight: bold">Last Name</label>
					<input type="text" id="CustLastName" name="CustLastName" class="form-control" placeholder="Last name" onfocus="myFocus(this)" onblur="myBlur(this)">
				</div>
			</div>
			<!-- Email -->
			<div class="form-group">
				<label for="CustEmail" style="font-weight: bold">Email</label>
				<input type="email" class="form-control" name="CustEmail" id="CustEmail" placeholder="Email" onfocus="myFocus(this)" onblur="myBlur(this)">
			</div>
			<!-- Phone numbers -->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="CustHomePhone" style="font-weight: bold">Home Phone</label>
					<input type="tel" name="CustHomePhone" id="CustHomePhone" class="form-control" placeholder="Home Phone" onfocus="myFocus(this)" onblur="myBlur(this)">
				</div>
				<div class="form-group col-md-6">
					<label for="CustBusPhone" style="font-weight: bold">Business Phone</label>
					<input type="tel" name="CustBusPhone" id="CustBusPhone" class="form-control" placeholder="Business Phone" onfocus="myFocus(this)" onblur="myBlur(this)">
				</div>
			</div>
			<!-- User ID and password -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="CustUserId" style="font-weight: bold">User ID:</label>
						<input type="text" class="form-control" name="CustUserId" id="CustUserId" placeholder="User Name" onfocus="myFocus(this)" onblur="myBlur(this)">
					</div>
					<div class="form-group col-md-6">
						<label for="CustPassword" style="font-weight: bold">Password</label>
						<input type="password" class="form-control" name="CustPassword" id="CustPassword" placeholder="Password" onfocus="myFocus(this)" onblur="myBlur(this)">
					</div>
				</div>
			<!-- Address -->
			<div class="form-group">
				<label for="CustAddress" style="font-weight: bold">Address</label>
				<input type="text" class="form-control"  name="CustAddress" id="CustAddress" placeholder="1234 Main St" onfocus="myFocus(this)" onblur="myBlur(this)">
			 </div>
			<!-- City Province and Postal Code line-->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="CustCity" style="font-weight: bold">City</label>
					<input type="text" class="form-control" name="CustCity" id="CustCity" placeholder="City" onfocus="myFocus(this)" onblur="myBlur(this)">
				</div>
				<!-- Province drop down list -->
				<div class="form-group col-md-4">
				  <label for="CustProv" style="font-weight: bold">Province/Territory</label>
				  <select id="CustProv" name="CustProv" class="form-control" onfocus="myFocus(this)" onblur="myBlur(this)">
					<option value="">Select a province/territory</option>
					<option value="ab">Alberta</option>
					<option value="bc">British Columbia</option>
					<option value="mb">Manitoba</option>
					<option value="nb">New Brunswick</option>
					<option value="nf">Newfoundland and Labrador</option>
					<option value="nw">Northwest Territories</option>
					<option value="ns">Nova Scotia</option>
					<option value="nu">Nunavut</option>
					<option value="on">Ontario</option>
					<option value="pe">Prince Edward Island</option>
					<option value="qc">Quebec</option>
					<option value="sk">Saskatchewan</option>
					<option value="yk">Yukon</option>
				  </select>
				</div>
				<!-- Postal Code -->
				<div class="form-group col-md-2">
					<label for="CustPostal" style="font-weight: bold">Postal Code</label>
					<input type="text" class="form-control" name="CustPostal" id="CustPostal" placeholder="Postal Code" onfocus="myFocus(this)" onblur="myBlur(this)">
				</div>
				<!-- Submit and reset buttons onclick confirmations and validation fuunction calls-->
				<div class="form-row">
					<input type="submit" class="btn-primary btn-lg" onclick="return validate(this.form);" value="Register"/>
					<input type="reset" class="btn-info btn-sm" onclick="return confirm('Do you really want to reset?');" />
				</div>
			</div>
		</form>
	</div>
	</div>
	<?php include("templates/footer.php"); ?>

</body>
</html>
