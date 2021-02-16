<?php

if(isset($_POST['submit'])){

    $name 		=  $_POST['myname'];

    if($name == ""){
        echo "Null submission...";
    }else{
        echo "Success";
    }

}else{
    echo 'invalid request...';
}
?>