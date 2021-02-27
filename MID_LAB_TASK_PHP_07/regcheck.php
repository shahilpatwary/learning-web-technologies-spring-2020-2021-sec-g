<?php
	session_start();

    if (isset($_POST['submit']))
    {        
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $re_password = $_POST['re_password'];
        
        if ($email == "" || $username =="" || $password == "") 
        { 
            echo "Enter the all value";
        } 
        else{
            if($password==$re_password)
            {
                $user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
				$_SESSION['current_user'] = $user;

				header('location: login.html');
            }
            else
            {
                echo "password did't match";
            }
        }
    }
?> 