<?php ;
	require ('../model/db.php');

    if(isset($_POST['edit'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

        $id= $_GET['id'];
        $sql="UPDATE `users` SET `name` = '$username', `password` = '$password', `email` = '$email' WHERE `users`.`id` =  $id;";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "updated <br>";
        echo    " <a href=\"../view/userList.php\"> Updated List </a> "; }
    }

?>