<?php
	require ('../model/db.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}
		else{

			$sql= "SELECT * FROM `users` WHERE `name`='$username' AND `password`='$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_num_rows($result);

			if($row=='1'){
				$userdata = mysqli_fetch_assoc($result);
				$_SESSION['current_user'] = $userdata;
				$_SESSION['flag'] = true;
				print_r($_SESSION['current_user']);
				header('location: ../view/home.php');
			}
			else{
				echo 'invalid user';
			}
			
		}
	}


?>