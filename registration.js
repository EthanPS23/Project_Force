
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
		alert("invalid email address");
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
		alert("Invalid phone number. Use: XXX-XXX-XXXX format");
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
		alert("Invalid postal code");
		return false;
	}
	// Confirm Submit //
	return confirm("Continue submitting?");
}

// Registraion form Validation End //