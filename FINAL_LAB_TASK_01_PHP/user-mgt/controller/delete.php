<?php 
	require ('../model/db.php');
    
    $id= $_GET['id'];
    $sql= "DELETE FROM `users` WHERE `users`.`id` ='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result){
    echo "delted";
    echo    " <a href=\"../view/userList.php\"> Updated </a> "; 

    }else{
        echo "error delete";
    
    }
?>