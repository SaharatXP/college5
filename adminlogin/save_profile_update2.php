<?php
session_start();
include('../db_config.php');
	
	  		 
				 
			$check_image11 = $_FILES["img"]["name"];
			$check_type = $_FILES["img"]["type"];
			$update_img11 = "";
		 

 				if(empty($check_image11)){
						$check_image11 = "";
					}else{
						$check_image11 = "resimg".rand(1,999)."img".rand(1,9999).".png";
						if(move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$check_image11))
						{
							 $update_img11  =  ",img = '".$check_image11."'" ;
						} 
					}

				$strSQL = "Update member Set
				 name = '".$_POST["name"]."',  
				 name2 = '".$_POST["name2"]."',  
				 address = '".$_POST["address"]."',   
				 telphone = '".$_POST["telphone"]."',    
				 email = '".$_POST["email"]."',    
				 password = '".$_POST["password"]."',   
				 status = '".$_POST["title"]."'  " . $update_img11 ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'profile.php';</script>");
		 
	 
?>