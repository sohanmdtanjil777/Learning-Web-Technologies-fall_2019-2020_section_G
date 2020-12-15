<?php 

    $location = 'localhost';
	$dbuser	= 'root';
	$dbpass	= '';
	$database = 'ajax_practice'; 

	function getConnection(){
		
		global $location;
		global $dbuser;
		global $dbpass;
		global $database;

		$conn = mysqli_connect($location, $dbuser, $dbpass, $database);
		return $conn;
	}




?>



<?php



if (isset($_REQUEST['name'])){

	$uname = $_REQUEST['name'];
}
if (isset($_REQUEST['email'])){


	$email = $_REQUEST['email'];
}
if (isset($_REQUEST['gender'])){

	$gender = $_REQUEST['gender'];
}
if (isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])){

	$day = $_REQUEST['day'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];

	$dob = $day ."/". $month ."/". $year;

}

if (isset($_REQUEST['blood'])){

	$blood = $_REQUEST['blood'];


}


$conn = getConnection();



$sql = "INSERT INTO ajax_test  VALUES ('', '$uname', '$email', '$gender', '$dob', '$blood')";






    if(mysqli_query($conn, $sql)){

			echo "Data Inserted"; 

		}else{

			echo "NOt inserted";

		}


  //echo "text show";





 ?>