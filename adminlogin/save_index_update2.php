<?php
session_start();
include('../db_config.php');
	
	  		  
 
				$strSQL = " Update images Set bill_no = '".$_POST["idupdate"] ."'  " ;
				$strSQL .=" WHERE bill_no = '' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 


				//echo $strSQL; 
				echo("<script>window.location = 'index.php'; </script>"); 
		 
	 
?>