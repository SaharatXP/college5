<?php
session_start();
include("../db_config.php");
	
	  		  
				$_SESSION["Fullname"] = $_POST["name"];
	
				$strSQL = "Update member Set 
							name = '".$_POST["name"]."',  
							name2 = '".$_POST["name2"]."',  
							email = '".$_POST["email"]."',  
							telphone = '".$_POST["telphone"]."',  
							address = '".$_POST["address"]."',  
							password = '".$_POST["password"]."'  
							" ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'profile.php';</script>");
		 
	 
?>