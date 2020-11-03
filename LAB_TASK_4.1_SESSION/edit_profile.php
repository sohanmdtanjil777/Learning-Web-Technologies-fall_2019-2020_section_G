<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style>
		li.header{
            display: inline;
           }

      table{
      	border: 1px solid black;
      	border-collapse: collapse;
      }

      td{
        	border-bottom: 1px solid black;
        }
        .middle{

        	border-right: 1px solid black;
        }
	</style>
</head>
<body>
   <table width="100%">
   	<tr style="height: 30px">
		<td width="300px"><img align="left" src="logo.PNG" height="60px" width="100px"></td>
		<td width="500px"></td>
		<td >
			<ul type="none" >
				<li class="header">Logged in as |</li>
				<li class="header"><a href="logout.php">Logout</a></li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="middle"  height="360px">
			<ul type="none" >
				 
				<li><h3>Accounts</h3></li>
			</ul>
			<ul>
				<li><a href="logged_in_dashbord.php">Dashbord</a></li>
				<li><a href="view_profile.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="change_profile_picture.php">Change profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</td>
		<td colspan="2">
			<div align="center">
				<fieldset style="width: 600px; height: 460px; margin-top: 20px">
					<legend>Profile</legend>
					<table style="width: 550px; height: 430px; border: none;">
						<tr>
							<td>Name</td>
							<td>:<input type="text"  name="editName"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:<input type="Email" name="editEmail"></td>
							
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								:<input type="radio"  name="gender" value=""> Male
                                <input type="radio"  name="gender" value=""> Female
                                <input type="radio"  name="gender" value=""> Other 
							</td>
							
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td>:<input type="Date" name="date"></td>
							
						</tr>
						<tr>
							<td colspan="2" style="border-bottom: none;"><input type="submit" name="Submit"></td>
						</tr>
					</table>
				</fieldset>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center" colspan="3"><h3>Copy Right</h3></td>
	</tr>
   </table>
</body>
</html>