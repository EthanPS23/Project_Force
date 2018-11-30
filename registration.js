//Page creation by: James Sharpe
// Registraion form Validation Start //
function validate(mainform)
{
	var myform = document.getElementById("form1")
	// First name check //
	if (mainform.elements[0].value == "")
	{
		alert("First name is required");
		//mainform.elements[0].btn-danger
		return false;
	}
	// Last name check //
	if (mainform.elements[1].value == "")
	{
		alert("Last name is required");
		return false;
	}
	// Email check //
	if (mainform.elements[2].value == "")
	{
		alert("A valid email is required");
		return false;
	}
	// Email validation check //
	var reg = /^[a-zA-Z][a-zA-Z0-9.!#$%&'*+\/=?^_`{-]+@([a-zA-Z][a-zA-Z0-9-]+\.)+[a-zA-Z]{2,6}$/;
	if (!reg.test(mainform.elements[2].value))
	{
		alert("Invalid email format. Use: xxxx@domain.xxx format");
		return false;
	}
	// Home phone check //
	if (mainform.elements[3].value == "")
	{
		alert("A home phone number is required");
		return false;
	}
	// Phone validation check //
	var reg3 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	if (!reg3.test(mainform.elements[3].value))
	{
		alert("Invalid phone number format. Use: xxx-xxx-xxxx format");
		return false;
	}
	// Username check //
	if (mainform.elements[5].value == "")
	{
		alert("User name is required");
		return false;
	}
	// Password check //
	if (mainform.elements[6].value == "")
	{
		alert("A password is required");
		return false;
	}
	// Address check //
	if (mainform.elements[7].value == "")
	{
		alert("An address is required");
		return false;
	}
	// City check //
	if (mainform.elements[8].value == "")
	{
		alert("A city is required");
		return false;
	}
	// Province check //
	if (mainform.elements[9].value == "")
	{
		alert("Select a Province");
		return false;
	}
	// Postal Code check //
	if (mainform.elements[10].value == "")
	{
		alert("A valid postal code is required");
		return false;
	}
	// Postal Code validation check //
	mainform.elements[10].value = mainform.elements[10].value.toUpperCase();
	var reg2 = /^([A-Za-z]\d[A-Za-z][-]?\d[A-Za-z]\d)/;
	if (!reg2.test(mainform.elements[10].value))
	{
		alert("Invalid postal code format. Use X#X #X# format.");
		return false;
	}
	// Confirm Submit //
	return confirm("Continue submitting?");
}

// Registraion form Validation End //

function myFocus(x)
{
	x.style.background = "beige";
	document.getElementById("f1").style="color: red";
	//the switch cycles each form field name for a match
	var help = x.id;
	switch (help)
	{
		case "CustFirstName":
			document.getElementById("f1").innerHTML="Required field: insert first name here"
			break;
		case "CustLastName":
			document.getElementById("f1").innerHTML="Required field: insert last name here"
			break;
		case "CustEmail":
			document.getElementById("f1").innerHTML="Required field: insert Email here"
			break;
		case "CustHomePhone":
			document.getElementById("f1").innerHTML="Required field: insert phone number here"
			break;
		case "CustBusPhone":
			document.getElementById("f1").innerHTML="Not required: provide business phone if necessary here"
			document.getElementById("f1").style="color: purple"
			break;
		case "CustUserId":
			document.getElementById("f1").innerHTML="Required field: insert a userID here"
			break;
		case "CustPassword":
			document.getElementById("f1").innerHTML="Required field: insert password here"
			break;
		case "CustAddress":
			document.getElementById("f1").innerHTML="Required field: insert an address here"
			break;
		case "CustCity":
			document.getElementById("f1").innerHTML="Required field: insert a city here"
			break;
		case "CustProv":
			document.getElementById("f1").innerHTML="Required field: select a province here"
			break;
		case "CustPostal":
			document.getElementById("f1").innerHTML="Required field: insert a postal code here"
			break;
	}
	document.getElementById("f1").style.display='block';
}

//function for onblue to hide any help text in the form
function myBlur(x)
{
	x.style.background = "white";
	//document.getElementById("f1").style="color: red";
	//document.getElementById("f1").style.display='none';
	document.getElementById("f1").innerHTML="<br />";
}