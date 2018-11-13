<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="mainStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title>Register Page</title>
		<script>
			function validate(mainform)
			{
				var myform = document.getElementById("form1")
				if (document.forms[0].inputfname.value == "")
				{
					alert("First Name must have a value");
					return false;
				}
				if (mainform.elements[1].value == "")
				{
					alert("Last Name must have a value");
					return false;
				}
				return confirm("Continue submitting?");
			}
		</script>

<body>
	<?php include("navBar.php") ?>
	<div class="container">
		<form id="form1" method="get" action="bouncer.php">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputfname">First Name</label>
					<input type="text" name="inputfname" class="form-control" placeholder="First name">
				</div>
				<div class="form-group col-md-6">
					<label for="inputlname">Last Name</label>
					<input type="text" class="form-control" placeholder="Last name">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			</div>

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

			 <div class="form-group">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			 </div>

			 <div class="form-group">
				<label for="inputAddress2">Address 2</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			 </div>

			 <div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputCity">City</label>
					<input type="text" class="form-control" id="inputCity">
			</div>
				<div class="form-group col-md-4">
				  <label for="inputProvince">Province</label>
				  <select id="inputProvince" class="form-control">
					<option value="">Select a province</option>
					<option value="bc">Bristish Columbia</option>
					<option value="ab">Alberta</option>
					<option value="sk">Saskatchewan</option>
					<option value="mb">Manitoba</option>
					<option value="on">Ontario</option>
					<option value="qc">Quebec</option>
					<option value="ns">Nova Scotia</option>
					<option value="nb">New Brunswick</option>
					<option value="nf">Newfoundland and Labrador</option>
					<option value="pe">Prince Edward Island</option>
					<option value="yk">Yukon</option>
					<option value="nu">Nunavut</option>
					<option value="nw">Northwest Territories</option>
				  </select>
				</div>
				<div class="form-group col-md-2">
					<label for="inputPostal">Postal</label>
					<input type="text" class="form-control" id="inputPostal">
				</div>
			</div>
			<input type="submit" onclick="return validate(this.form);" />
			<input type="reset" onclick="return confirm('Do you really want to reset?');" />
		</form>
	</div>
	<?php include("footer.php") ?>
</body>
