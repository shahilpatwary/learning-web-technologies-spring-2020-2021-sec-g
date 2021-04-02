<?php 
  $conn	= mysqli_connect('localhost', 'root', '', 'webtech');

   if($conn){
    echo "success";
   }else{
    die('DB connection error...');
   }
  $sql= "INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES ('NULL', 'xyz', 'xyz', 'xyz@gmail.com')";
  $result = mysqli_query($conn, $sql);
  echo $result;
?>