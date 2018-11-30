//Page creation by: Mo Sagnia
function validateAgt(myform)
{
  //agent first name
	if (myform.AgtFirstName.value == "")
	{
		alert("Agent must have a first name");
		return false;
	}

  //agent last name
	if (myform.AgtLastName.value == "")
	{
		alert("Agent must have a last name");
		return false;
	}

  //agent phone number
  var reg2 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	if (!reg2.test(myform.AgtBusPhone.value))
  {
    alert("Invalid phone number format. Use: XXX-XXX-XXXX");
    return false;
  }

  //agent email address
  var reg = /^[a-zA-Z][a-zA-Z0-9.!#$%&'*+\/=?^_`{-]+@([a-zA-Z][a-zA-Z0-9-]+\.)+[a-zA-Z]{2,6}$/;
	if (!reg.test(myform.AgtEmail.value))
	{
		alert("Invalid email address");
		return false;
	}

  //agent position
  if (myform.AgtPosition.value == "")
  {
    alert("Agent must have a position");
    return false;
  }

  //agency of agent
  if (myform.AgencyId.value == "")
	{
		alert("Select an agency for agent");
		return false;
	}

	return confirm("Continue submitting?");
}
