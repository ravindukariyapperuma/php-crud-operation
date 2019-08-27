<?php

$conn = new mysqli("localhost", "root", "", "crud") OR die("Error : ".mysqli_error($conn));


	if((!empty($_POST['username'])) && (!empty($_POST['password']))) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$iQuery = "INSERT INTO account(username, password) values(?,?)";
		$stmt = $conn->prepare($iQuery);
		$stmt->bind_param("ss", $username, $password);
		if($stmt->execute()){
			#alert msg
		}
		$stmt->close();
		$conn->close();
		
	}
	else{
		#alert msg
	}
	header("location: index.php")



?>