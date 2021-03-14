<?php
  
  session_start();

   if(isset($_POST['submit']))
   {

    $id = $_POST['id'];
    $password  = $_POST['password'];

    if($id == "" || $password == "")
    {
        echo "null input...";
    }
    else
    {
        $file_location='../model/user.json';
        $myfile = fopen($file_location, 'r');
        $flag = false;
        $customers = json_decode(fread($myfile, filesize($file_location)),true);
        foreach ($customers as $user){ 
            if($user['id'] == $id && $user['password']==$password){
                $flag = true;
                break;
            }
        } 

        if($flag){
            $_SESSION['flag']=true;
            header('location: ../view/home.html');
        }
        else{
            echo "UserName or password is Incorrect!!!";
        }
    }
}
?>