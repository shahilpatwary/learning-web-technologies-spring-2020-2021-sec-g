<?php
    $myfile = fopen('../MODEL/users.json', "r");
    $data = fread($myfile, filesize('../MODEL/users.json'));

    $users = json_decode($data, true);

?>     

<html>
<body>
    <table>
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
     <?php 
        foreach ($users as $id=>$user)
        {   echo "<tr>";

        echo "<td>  $id </td>";

       foreach ($user as $type=>$value){
        if ($type=='username'){
            echo "<td>";
            echo "$value";
        }
        echo "</td>";

        if ($type=='email'){
            echo "<td>";
            echo "$value";
        }
        echo "</td>";

     }

     echo "<td>";
     echo "<a href=\"edit.php?id=$id\">";
     echo" Edit </a>";

     echo "<a href=\"delete.php?id=$id\">";
     echo" Delete </a>";
     echo "</td>";

     echo "</tr>";

     }

     echo sizeof($users);
     ?>
    </table>
 </body>

  </html>