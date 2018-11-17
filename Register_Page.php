<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1>
	
	<link rel="stylesheet" href="mainStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<!-- Registration Page JS -->
	<script src="registration.js"></script>
	<title>Register Page</title>

<body>
	<!-- Start Registraion Page -->
	<div class="jumbotron text-center">
      <h1>Register with us!</h1>
    </div>
	<div class="container">
		<form id="form1" method="get" action="bouncer.php">
			<!-- First and last name -->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputfname">First Name</label>
					<input type="text" id="inputfname" name="inputfname" class="form-control" placeholder="First name">
				</div>
				<div class="form-group col-md-6">
					<label for="inputlname">Last Name</label>
					<input type="text" class="form-control" placeholder="Last name">
				</div>
			</div>
			<!-- Email -->
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			</div>
			<!-- Phone numbers -->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputhphone">Home Phone</label>
					<input type="tel" name="inputhphone" class="form-control" placeholder="Home Phone">
				</div>
				<div class="form-group col-md-6">
					<label for="inputbphone">Business Phone</label>
					<input type="tel" name="inputbphone" class="form-control" placeholder="Business Phone">
				</div>
			</div>
			<!-- User ID and password -->
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="userid">User ID:</label>
					<input type="text" class="form-control" id="userid" placeholder="User Name">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword">Password</label>
					<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				</div>
			</div>
			<!-- Address -->
			 <div class="form-group">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			 </div>
			 <!-- City Province and Postal Code line-->
			 <div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputCity">City</label>
					<input type="text" class="form-control" id="inputCity" placeholder="City">
				</div>
				<!-- Province drop down list -->
				<div class="form-group col-md-4">
				  <label for="inputProvince">Province/Territory</label>
				  <select id="inputProvince" class="form-control">
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
					<label for="inputPostal">Postal Code</label>
					<input type="text" class="form-control" id="inputPostal" placeholder="Postal Code">
				</div>
			<!-- Submit and reset buttons -->
			</div class="form-row">
					<input type="submit" class="btn-primary btn-lg" onclick="return validate(this.form);" />
					<input type="reset" class="btn-secondary btn-sm" onclick="return confirm('Do you really want to reset?');" />
			</div>
		</form>
	</div>
</body>