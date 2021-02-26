<?php 
    session_start();
    if(isset($_SESSION['flag'])){
       $username = $_SESSION['current_user']['username'];
    }else{	
        header('location: home.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table border="1" width="100%" align="center"'>
        <tr>
            <td colspan="3" height="80px" align="left">
            <img src="logo.png" height="50px">
            </td>           
            <td align="Right">
                <h3>
                logged in as <?php echo"$username" ; ?> | 
                <a href="logout.php" >Logout</a> |
                </h3>
            </td>                        
        </tr>
    </table>
        <table border="1" width="100%" align="center" height="400px">
                <tr >
                    <td width="200px">
                        <p>
                           <h3>Account</h3>
                            <ul>
                                <li><a href="dashboard.php"> Dashboard</a></li>
                                <li><a href="viewprofile.php"> View Profile</a></li>
                                <li><a href="editprofile.php"> Edit Profile</a></li>        
                                <li><a href="changephoto.php"> Change Profile Picture</a></li>    
                                <li><a href="changepass.php"> Change Passowrd</a></li>
                                 <li><a href="logout.php"> Logout </a></li>           
                            </ul>      
                        </p>
                    </td>
                    <td >
                           <h3> welcome <?php echo"$username" ; ?> </h3> 
                    </td>
               
                </tr>             
        </table>
    </table>
    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table> 
</body>
</html>