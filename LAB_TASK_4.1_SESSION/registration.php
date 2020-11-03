<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<style>

	ul li{
            display: inline;
           }

      table{
      	border: 1px solid black;
      	border-collapse: collapse;
      }

      td{
        	border-bottom: 1px solid black;
        }

    </style>
</head>
<body>
  <table width="100%">
  	<tr style="height: 30px">
		<td><img align="left" src="logo.PNG" height="60px" width="100px"></td>
		<td width="700px"></td>
		<td >
			<ul type="none" >
				<li><a href="Public_home.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="registration.php">Registration</a></li>
			</ul>
		</td>
	</tr>
    <tr>
    	<td colspan="3" >

    	<div align="center">

          <form >
          	<fieldset style="width: 420px; height: 470px;">
          		<legend> Registration</legend>

	          <table style="width: 400px; height: 460px; border: none;" >
		         
		        <tr >
			        <td >Name</td>
			        <td >:<input type="text" id="name" name="name" value=""></td>
			        
		        </tr>
		        <tr>
		        	<td>Email</td>
		        	<td>:<input type="email" id="email" name="email"></td>
		        	
		        </tr>
		        <tr>
		        	<td>User Name</td>
		        	<td>:<input type="text" id="uname" name="uname"></td>
		        </tr>
		        <tr>
		        	<td>Password</td>
		        	<td>:<input type="Password" id="password" name="password">
		        </tr>
		        <tr>
		        	<td>Confierm Password</td>
		        	<td>: <input type="Password" id="cpassword"  name="cpassword"></td>
		        </tr>
		        <tr>
		        	<td>Gender</td>
		        	<td>
		        		:<input type="radio" id="male" name="gender" value=""> Male
                        <input type="radio" id="female" name="gender" value=""> Female
                        <input type="radio" id="other" name="gender" value=""> Other 
		        	</td>
		        	
		        </tr>
		        <tr>
		        	<td>Date of Birth</td>
		        	<td>:<input type="Date" id="date" name="date"></td>
		        	
		        </tr>

		       
		        <tr>
		        	<td  align="right" colspan="2" style="border-bottom: none;">
		        		<input type="submit" value="Submit">
		        		<input type="reset" value="Reset" >
		        	</td>
		        </tr>
	        </table>
	      </fieldset>
       </form>
      </div>
     </td>
    </tr>

    <tr>
    	<td align="center" colspan="3"><h2>CopyRight</h2></td>
    </tr>

  </table>

</body>
</html>