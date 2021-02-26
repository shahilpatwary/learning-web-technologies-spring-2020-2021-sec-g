<?php
  
  session_start();

   if(isset($_POST['submit']))
   {

    $username = $_POST['username'];
    $password  = $_POST['password'];

    if($username == "" || $password == "")
    {
        echo "null input...";
    }
    else
    {
        if($_SESSION['username'] == $username && $_SESSION['password'] == $password)
        {
          
            echo "valid user...";
        }
        else
        {
            echo "invalid user...";
        }
    }
}
?>