<?php

$conn = new mysqli("localhost", "root", "", "crud") OR die("Error : ".mysqli_error($conn));

//code to save user's data
if(isset($_POST['save'])) {
	if(!empty($_POST['username']) && !empty($_POST['password']) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$iQuery = "INSERT INTO account(username, password) values(?,?)";
		$stmt = $conn->prepare($iQuery);
	}
}
?>