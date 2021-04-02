<?php
	$title = "User List Page";
	include('header.php');
    require ('../model/db.php');	
?>
	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	<table border="1">
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
    <?php $sql = "select * from users";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>
                        <a href=\"edit.php?id={$row['id']}\"> <b>Edit</b> </a> |
                        <a href=\"../controller/delete.php?id={$row['id']}\"> <b>Delete</b></a>
                        </td
                    </tr>";
        }
    ?>
    </table>

<?php
	include('footer.php');
?>