<?php
    $sql = "SELECT * FROM admin WHERE username='$username' and password = '$password'";
    $result = mysqli_query($sql); 
    if(!$result)
    {
    	die("failed to query database ".mysqli_error());
    }
    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password)
    {
    	echo 'User is login successfully '.$row['username'];
        header("refresh:1;Dashboard");
    }
    else
    {
    	echo 'Failed to Login';
    }
?>