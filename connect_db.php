<?php

//error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
   // $sql= new mysqli("localhost","root", "", "pharmacy");

	$con=mysqli_connect('localhost','root','', 'pharmacy')or die("cannot connect to server");
if($con ->connect_errno){
	echo "Failed to connect to db: ". $mysqli->connect_error;
	exit();
//}
//mysqli_select_db('pharmacy')or die("cannot connect to database");
}
?>