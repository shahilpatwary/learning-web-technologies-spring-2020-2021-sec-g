<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="left">
                <img src="logo.png" height="50px">
            </td>
            <td align="Right">
                <h4>
                    <a href="Home.html"> Home</a> | 
                    <a href="Login.html" >Login</a> |
                    <a href="Registration.html"> Registration</a> 			
                </h4>
            </td>
        </tr>
    </table>

    <table width="100%" border="1">   
        <td height='200px' align="left">
            <h3> Welcome to xCompany </h3> 
        </td>
    </table>

    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table> 
    
</body>
</html>
<?php
	}else{
		header('location: login.html');
	}
?>