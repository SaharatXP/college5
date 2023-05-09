<?php
session_start();
header('Content-Type: application/json');
include('../db_config.php');
	 
	$data1 = $_POST["data1"];   
	$data2 = $_POST["data2"];   
	$objQuery = "";

	   
				
				$strSQL = "INSERT INTO data_class ( data1, data2, iddata ) VALUES  ( '".$data1."' , '".$data2."' , '' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);
			 
			 	  
	 
	print_r($objQuery);
?>