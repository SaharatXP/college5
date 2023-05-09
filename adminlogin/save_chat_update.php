<?php
include("../db_config.php");
	
	  		  
 
				$strSQL = "Update boardroom Set title = '".$_POST["title"]."', 
				 subject = '".$_POST["subject"]."',
				 detail = '".$_POST["detail"]."'  "  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'chat.php';</script>");
		 
	 
?>