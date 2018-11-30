//Page creation by: Mo Sagnia
//function to validate various form inputs

function validate(myform)
{
  //agency address
	if (myform.AgncyAddress.value == "")
	{
		alert("Enter an address for agency");
		return false;
	}

  //agency city
	if (myform.AgncyCity.value == "")
	{
		alert("Enter a city for agency");
		return false;
	}

	//agency province
	if (myform.AgncyProv.value == "")
	{
		alert("Please select a Province");
		return false;
	}

	myform.AgncyPostal.value = myform.AgncyPostal.value.toUpperCase();
	var reg3 = /^([A-Za-z]\d[A-Za-z][-]?\d[A-Za-z]\d)/;
	if (!reg3.test(myform.AgncyPostal.value))
	{
		alert("Invalid postal code. Format: G1G8T4");
		return false;
	}

  //agency phone number
  var reg2 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	if (!reg2.test(myform.AgncyPhone.value))
  {
    alert("Invalid phone number format. Use: XXX-XXX-XXXX");
    return false;
  }

	//agency fax number
  var reg3 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	if (!reg2.test(myform.AgncyFax.value))
  {
    alert("Invalid phone number format. Use: XXX-XXX-XXXX");
    return false;
  }

	return confirm("Continue submitting?");
}
