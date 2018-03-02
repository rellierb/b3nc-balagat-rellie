<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	require '../mysqli_connect.php';

	if(!empty($_POST['email'])) {
		$email = mysqli_real_escape_string($dbconn, $_POST['email']);
	}

	if(!empty($_POST['password1'])) {
		$password = mysqli_real_escape_string($dbconn, $_POST['password1']);
	}

	if($email && $password) {

		$query = "SELECT users.id, users.email, users.password, users.first_name, users.role_id FROM users WHERE email='$email' AND password=SHA1('$password')";

		$result = mysqli_query($dbconn, $query);

		if(mysqli_num_rows($result) == 1) {

			$data = mysqli_fetch_assoc($result);

			$_SESSION['user_id'] = $data['id'];
			$_SESSION['roles'] = $data['role_id'];
			$_SESSION['first_name'] = $data['first_name'];
			$_SESSION['email'] = $data['email'];			

			// echo $_SESSION['user_id'];


			// if($_SESSION['roles'] == "1") {
			// 	header('location: ../admin.php');
			// } else {
			// 	header('location: ../home.php');	
			// }

			header('location: ../home.php');
		} else {
			echo 'wrong username or password';
		}
	}
}