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
                echo "sucess";
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                $_SESSION['re_password']=$re_password;
                print_r($_SESSION);
            }
            else
            {
                echo "password did't match";
            }
        }
    }
?> 