<?php
//connection mysql with php
$con = mysqli_connect('localhost','root','',);

//check connectivity 
if(!$con)
{
	die("Error connecting with server ");
}
else
{
	$db = mysqli_select_db($con,'$Register');
	if(!$db)
	{
		die("Error connecting with database");
	}
	else
	{
		echo 'Database connected successfully ';
	}
}
mysqli_close($con);
?>