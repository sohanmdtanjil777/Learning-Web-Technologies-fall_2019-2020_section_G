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
  <?php

   session_start();

    $nameError="";
    $emailError="";
    $unameError="";
    $passError="";
    $cpassError="";
    $genderError="";
    $dateError="";
    
	
    
    $name="";
    $email="";
    $uname="";
    $password="";
    $cpassword="";
    $gender="";
    $date="";

    /*---id validation*/


    

 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {


    /*-----Id validation-----*/

    if (empty($_POST[])) {
      # code...
    }
	


  }
	?>


<!----------Html_code----------->

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

          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          	<fieldset style="width: 700px; height: 470px;">
          		<legend> Registration</legend>

	          <table style="width: 670px; height: 460px; border: none;" >
		         
		        <tr >
			        <td >Name</td>
			        <td >:<input type="text" id="name" name="name" value="<?php echo $name;?>">
			        	    <span>* <?php echo $nameError;?></span>

			        </td>
			        
		        </tr>
		        <tr>
		        	<td>Email</td>
		        	<td>:<input type="email" id="email" name="email">
		        		  <span>* <?php echo $emailError;?></span>
		        	</td>
		        	
		        </tr>
		        <tr>
		        	<td>User Name</td>
		        	<td>:<input type="text" id="uname" name="uname">
		        		 <span>* <?php echo $unameError;?></span>
		        	</td>
		        </tr>
		        <tr>
		        	<td>Password</td>
		        	<td>:<input type="Password" id="password" name="password">
		        		<span>* <?php echo $passError;?></span>
		        	</td>
		        </tr>
		        <tr>
		        	<td>Confierm Password</td>
		        	<td>: <input type="Password" id="cpassword"  name="cpassword">
		        		<span>* <?php echo $cpassError;?></span>
		        	</td>
		        </tr>
		        <tr>
		        	<td>Gender</td>
		        	<td>
		        		:<input type="radio" id="male" name="gender" value="Male"> Male
                        <input type="radio" id="female" name="gender" value="Female"> Female
                        <input type="radio" id="other" name="gender" value="Other"> Other 
                        <span >* <?php echo $genderError;?></span>
		        	</td>
		        	
		        </tr>
		        <tr>
		        	<td>Date of Birth</td>
		        	<td>:<input type="Date" id="date" name="date">
		        		<span >* <?php echo $dateError;?></span>
		        	</td>
		        	
		        </tr>

		       
		        <tr>
		        	<td  align="right" colspan="2" style="border-bottom: none;">
		        		<input type="submit" name="submit" value="Submit">
		        		<input type="reset" name="reset" value="Reset" >
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