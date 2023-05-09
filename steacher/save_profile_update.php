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


			$check_image21 = $_FILES["img2"]["name"];
			$check_type = $_FILES["img2"]["type"];
			$update_img21 = "";
		 

 				if(empty($check_image21)){
						$check_image21 = "";
					}else{
						$check_image21 = "resimg22".rand(1,999)."img".rand(1,9999).".png";
						if(move_uploaded_file($_FILES["img2"]["tmp_name"],"../img/".$check_image21))
						{
							 $update_img21  =  ",img2 = '".$check_image21."'" ;
						} 
					}


			$check_image31 = $_FILES["img3"]["name"];
			$check_type = $_FILES["img3"]["type"];
			$update_img31 = "";
		 

 				if(empty($check_image31)){
						$check_image31 = "";
					}else{
						$check_image31 = "resimg33".rand(1,999)."img".rand(1,9999).".png";
						if(move_uploaded_file($_FILES["img3"]["tmp_name"],"../img/".$check_image31))
						{
							 $update_img31  =  ",img3 = '".$check_image31."'" ;
						} 
					}


			$check_image41 = $_FILES["img4"]["name"];
			$check_type = $_FILES["img4"]["type"];
			$update_img41 = "";
		 

 				if(empty($check_image41)){
						$check_image41 = "";
					}else{
						$check_image41 = "resimg44".rand(1,999)."img".rand(1,9999).".png";
						if(move_uploaded_file($_FILES["img4"]["tmp_name"],"../img/".$check_image41))
						{
							 $update_img41  =  ",img4 = '".$check_image41."'" ;
						} 
					}
				$strSQL = "Update member Set
				 name = '".$_POST["name"]."',  
				 address = '".$_POST["address"]."',   
				 telphone = '".$_POST["telphone"]."',    
				 email = '".$_POST["email"]."',    
				 codestudent = '".$_POST["codestudent"]."',    
				 name2 = '".$_POST["name2"]."',    
				 subject = '".$_POST["subject"]."',    
				 major = '".$_POST["major"]."',    
				 major2 = '".$_POST["major2"]."',    
				 major3 = '".$_POST["major3"]."',    
				 password = '".$_POST["password"]."'  " . $update_img11.$update_img21.$update_img31.$update_img41 ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'profile.php';</script>");
		 
	 
?>