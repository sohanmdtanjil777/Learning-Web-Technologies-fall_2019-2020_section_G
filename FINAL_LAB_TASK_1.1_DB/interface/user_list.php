<?php

	require_once('../database/database.php');

	$conn = getConnection();
	$sql = 'select * from user_table';
	$result = mysqli_query($conn, $sql);

?>





<?php


if(isset($_GET['msg'])){
		
		if($_GET['msg'] == "user_inserted"){

			echo "username inserted successfully";
		}

		/*if($_GET['msg'] == "null_username"){
			echo "Username field is empty...";
		}

		if($_GET['msg'] == "null_password"){
			echo "Password field is empty...";
		}*/
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>user list</title>
</head>
<body>
   <a href="home.php">Back</a> |
	<a href="../php/log_out.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
			<td>ACTION</td>
		</tr>

	<?php while($data = mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['user_name']?></td>
				<td><?=$data['password']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['type']?></td>
				<td>
					<a href="edit_user.php?id=<?=$data['id']?>">EDIT</a> | 
					<a href="delete_user.php?id=<?=$data['id']?>">DELETE</a>
				</td>
			</tr>
	<?php } ?>

	</table>

</body>
</html>