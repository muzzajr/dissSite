<?php

	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "J0shuaryan";
	$dbname = "users";
	$tbl_name="people"; // Table name
	
	$con = mysqli_connect($servername,$username,$password,$dbname) or die("cannot connect");
	
	// username and password sent from form
	$myusername= mysqli_real_escape_string($con,$_POST['username']);
	$mypassword= mysqli_real_escape_string($con,$_POST['password']);;
	// protect databse
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysqli_real_escape_string($con, $myusername);
	$mypassword = mysqli_real_escape_string($con, $mypassword);

	$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
	$result=mysqli_query($con, $sql);
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	// If result matched $myusername and $mypassword, table row must be 1 row
	
	if ($count==1) {
		$_SESSION['loggedin'] = true;
		header("location:emotion1.php");
	}
	else {
	echo "Wrong Username or Password";
	}
?>