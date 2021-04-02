<?php
	session_start();
	require ('../model/db.php');

	if(isset($_POST['signup'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$repass = $_POST['repass'];
		$email 		= $_POST['email'];

		if($username == "" || $password == "" || $email == "")
		{
			echo "null value found...";
		}
		else
		{
			if($password == $repass)
			{

				$sql= "INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES ('NULL', '$username', '$password', '$email')";
				$result = mysqli_query($conn, $sql);
				echo $result;					
				if($result== '1')
				{
				header('location: ../view/login.html');
			    }
			    else
				{
				echo "password & confirm password mismatch...";
			    }
	    	}
	    }

	}
?>