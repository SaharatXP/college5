<?php
session_start();
include("../db_config.php");
	
	  
				$strSQL = "INSERT INTO boardroom (
				title, subject, detail,  
				create_date, create_date2, create_time  
				) 
				VALUES 
				(
				'".$_POST["title"]."','".$_POST["subject"]."',  '".$_POST["detail"]."',  
				'".date('d-m-Y')."',  '".date('Y-m-d')."', '".date('H:i')."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);		  

				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'chat.php';</script>");

?>