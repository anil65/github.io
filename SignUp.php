<?php
   if(isset($_POST['submit']))
   {
   	include('connection.php');
        $name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Branch = $_POST['Branch'];
        $sport = $_POST['sport']; 
   //insert value in database
   $sql = "INSERT INTO st_reg (name varchar(20) , Email varchar(25) , Password varchar(20) , Branch varchar(30) , sport varchar(30)) VALUES ($name,$Email,$Password,$Branch,$sport) " ;
   if(!mysqli_query($con,$sql))
   {
   	die("Insertion of the value is failed ");
   }
   else
   {
   	echo 'Insert Element Successfully ';
   	header("refresh:1;index.html");
   }
  }
?>