<?php
	session_start();

    if (isset($_POST['submit']))
    {        
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $re_password = $_POST['re_password'];
        $usertype = $_POST['usertype'];
  
        
        if ($id == "" || $username =="" || $password == "") 
        { 
            echo "Enter the all value";
        } 
        else{
            if($password==$re_password)
            {
                $user = ['username'=> $username, 'password'=> $password, 'id'=>$id,'usertype'=>$usertype];
				$_SESSION['current_user'] = $user;
                
                $file_location='../model/user.json';

				if(filesize($file_location)==0){
                    $myfile=fopen($file_location, 'w');
                    $json=json_encode($user);
                    fwrite($myfile, '['.$json.']');
				}
				else{
						$prevUsers = json_decode(file_get_contents($file_location));
						array_push($prevUsers, $user);
						file_put_contents($file_location, json_encode($prevUsers));
				}
				header('location: ../view/login.html');
            }
            else
            {
                echo "password did't match";
            }
        }
    }
?> 