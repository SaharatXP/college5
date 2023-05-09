<?php
include("../db_config.php");
	
	  		 
				 
				$check_image11 = $_FILES["img"]["name"];
				$check_type = $_FILES["img"]["type"];
					$update_img11 = "";
		 

					if(empty($check_image11)){
						$check_image11 = "";
					}else{
						$check_image11 = "renes".rand(1,9999).$_FILES["img"]["name"];
						if(move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$check_image11))
						{
							 $update_img11  =  ",img = '".$check_image11."'" ;
						} 
					}
 
				$strSQL = "Update news_report Set title = '".$_POST["title"]."', 
				 detail = '".$_POST["detail"]."'  " . $update_img11 ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'index.php';</script>");
		 
	 
?>