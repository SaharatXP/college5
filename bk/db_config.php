<?php  
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("Asia/Bangkok");

	  

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "root";
	$dbName = "ablbotco_college";
 
 
	// $serverName = "localhost";
	// $userName = "projecta_college";
	// $userPassword = "12345678";
	// $dbName = "projecta_college";
 



	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon,"utf8");
	mysqli_set_charset($con,"utf8");

	 
?>
