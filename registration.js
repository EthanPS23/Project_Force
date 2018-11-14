function validate(mainform)
{
	var myform = document.getElementById("form1")
	if (mainform.elements[0].value == "")
	{
		alert("First name is required");
		return false;
	}
	if (mainform.elements[1].value == "")
	{
		alert("Last name is required");
		return false;
	}
	if (mainform.elements[2].value == "")
	{
		alert("A valid email is required");
		return false;
	}
	
	var reg = /^[a-zA-Z][a-zA-Z0-9.!#$%&'*+\/=?^_`{-]+@([a-zA-Z][a-zA-Z0-9-]+\.)+[a-zA-Z]{2,6}$/;
	if (!reg.test(mainform.elements[2].value))
	{
		alert("invalid email address");
		return false;
	}
	
	if (mainform.elements[5].value == "")
	{
		alert("User name is required");
		return false;
	}
	if (mainform.elements[3].value == "")
	{
		alert("A home phone number is required");
		return false;
	}
	if (mainform.elements[6].value == "")
	{
		alert("A password is required");
		return false;
	}
	if (mainform.elements[7].value == "")
	{
		alert("An address is required");
		return false;
	}
	if (mainform.elements[8].value == "")
	{
		alert("A city is required");
		return false;
	}
	if (mainform.elements[9].value == "")
	{
		alert("Select a Province");
		return false;
	}
	if (mainform.elements[10].value == "")
	{
		alert("A valid postal code is required");
		return false;
	}
	
	mainform.elements[10].value = mainform.elements[10].value.toUpperCase();
	var reg2 = /^([A-Za-z]\d[A-Za-z][-]?\d[A-Za-z]\d)/;
	if (!reg2.test(mainform.elements[10].value))
	{
		alert("Invalid postal code");
		return false;
	}
	
	return confirm("Continue submitting?");
}