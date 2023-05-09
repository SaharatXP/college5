<?php
include("../db_config.php");
	
	  		 
				 
				 
					$update_img11 = "";
					$update_img21 = $_FILES["img2"]["name"];
					$update_img21save = $_FILES["img2"]["name"];
					if(empty($update_img21)){
						$update_img21save = "";
					}else{
						$update_img21 = "RFF".rand(1,9999).$_FILES["img2"]["name"];
						if(move_uploaded_file($_FILES["img2"]["tmp_name"],"../img/".$update_img21))
						{

						}
							
						$update_img21save = ", datafile = '".$update_img21."' ";
					}
		  

				$strSQL = "Update news_report2 Set headdata = '".$_POST["headdata"]."', title = '".$_POST["title"]."', detail = '".$_POST["detail"]."', subject = '".$_POST["subject"]."', createby = '".$_POST["createby"]."', datestart = '".$_POST["datestart"]."' ".$update_img21save."  ";
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'news.php';</script>");
		 
	 
?>