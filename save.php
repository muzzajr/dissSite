<?php
    
    $servername = "localhost";
	$username = "root";
	$password = "J0shuaryan";
	$dbname = "users";
	$tbl_name="userimages"; // Table name
	// Connect to server and select databse.
	$conn = mysqli_connect("$servername", "$username", "$password", "$dbname")or die("cannot connect");

    $img = $_POST['imgValue'];
	
	$sql = "INSERT INTO userimages (userID, emotionBefore, heropic, Scene1, Scene2, emotionafter) VALUES (9, NULL, '$img', NULL, NULL, NULL)";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		header("location:emotion1.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>