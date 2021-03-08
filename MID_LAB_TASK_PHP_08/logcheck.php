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
        $user = $_SESSION['current_user'];
        if($user['username'] == $username && $user['password'] == $password)
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