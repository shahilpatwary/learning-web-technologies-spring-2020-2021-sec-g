<?php
	session_start();

    if (isset($_POST['submit']))
    {   
        $Id=$_POST['id']    
        $name = $_POST['username'];
        $password  = $_POST['password'];
        $re_password = $_POST['re_password'];
        $usertype = $_POST['usertype'];
        
        if ($Id == "" || $name =="" || $password == "") 
        { 
            echo "Enter the all value";
        } 
        else{
            if($password==$re_password)
            {
                $customer = ['name'=> $name, 'password'=> $password, 'Id'=>$Id,'usertype'=>$usertype];
				$_SESSION['current_user'] = $customer;
                
                $file_location='../model/user.json';

				if(filesize($file_location)==0){
                    $myfile=fopen($file_location, 'w');
                    $json=json_encode($customer);
                    fwrite($myfile, '['.$json.']');
				}
				else{
                    $customers = json_decode(file_get_contents($file_location),true);
                    $flag = false;
                    if(isset($_SESSION['loggedInUser'])){
                        $loggedInUser = $_SESSION['loggedInUser'];
                    }
                    
                    foreach ($customers as $user => $entry){ 
                        if($entry['Id'] == $loggedInUser['Id']){
                            $customer[$user]['name'] == $customer['name'];
                            $customer[$user]['password'] == $customer['password'];
                            $_SESSION['loggedInUser'] = $customer;
                            $flag = true;
                            break;
                        }
                    }
                    if($flag){ 
						file_put_contents($file_location, json_encode($customers));
                    }
                    else{
                
						array_push($customers, $customer);
						file_put_contents($file_location, json_encode($customers));
                    }
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