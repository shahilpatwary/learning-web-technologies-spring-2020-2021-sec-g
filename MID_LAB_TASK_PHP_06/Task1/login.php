<?php

$userName="";
$error_userName="";
$password="";
$error_password="";

	if(isset($_POST['submit'])){

		if(empty($_POST["userName"])){
            $error_userName="User name required";
        }
        else if(strlen($_POST["userName"]) < 6){
            $error_userName="Username must be more than 6 characters long";
        }
        else if(strpos($_POST["userName"]," ")){
            $error_useName="Username should not contain whitespace";
        }

        else{   
            $userName=$_POST["userName"];
        }

        if(empty($_POST["password"]))
		 {
			 $error_password="[Password Required]";
		 }
		 elseif(htmlspecialchars($_POST["password"]))
		 {
			 $error_password=["HTML KeyWords Used"];
		 }
		 elseif (strlen($_POST["userName"])<8) {
		 	$error_password=["[Password must be 8 charachters to login"];
		 }
		 elseif(!strpos($_POST["password"],"#"))
		 {
			 $error_password="[special character]";
		 }
		 elseif(!is_numeric($_POST["password"]))
		 {
			 $error_password="[Numeric values]";
		 }
		 elseif(!ctype_upper($_POST["password"]))
		 {
			 $error_password="[ UpperCase]";
		 }
		 elseif(!ctype_lower($_POST["password"]))
		 {
			 $error_password="[ LowerCase]";
		 }

		 elseif(strpos($_POST["password"]," "))
		 {
			 $error_password="[white space]";
		 }
		 else
		 {
			 $error_password=$_POST["password"];
         }


	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
    <fieldset>
    <legend></legend>
    username:    <input type="text" name="userName" ><span><?php echo $error_userName;?></span><br>
    password:    <input type="password" name="password"><span><?php echo $error_password;?></span> <br>

    <input type="checkbox" name="" value="">Reminder me<br>
    <input type="submit" name="submit" value="Submit">
    <a href="p2.html">Forget Password?</a>
    
    </fieldset>
    
    
    </form>
</body>
</html>