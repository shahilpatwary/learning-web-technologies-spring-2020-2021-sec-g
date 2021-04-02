 <?php
	$title = "Edit Page";
	include('header.php');
	require ('../model/db.php');
	$id= $_GET['id'];
	$sql= "SELECT `id`, `name`, `password`, `email` FROM `users` WHERE `id`=$id";
	$result = mysqli_query($conn, $sql);
	$userdata = mysqli_fetch_assoc($result);

?>

	<form method="post" action="../controller/editCheck.php?id=<?php echo $id; ?>">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $userdata['name']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $userdata['password']; ?>"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $userdata['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="edit" value="Update"> 
						<a href="userList.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>
