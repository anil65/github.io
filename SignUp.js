function ValidatePassword()
{
	var password = document.getElementById("password01").value;
	var confirmPassword = document.getElementById("confirm02").value;
	if(password.length != confirmPassword.length)
	{
       alert("password and confirm password are not same ");
	}
	else
	{
      confirm(" password and confirm  are not same ");
	}
}
