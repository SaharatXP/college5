<?php
include('../db_config.php');
	 
		$id = $_POST["del"];  

		  
			$strSQL = "Delete From data_class  ";
			$strSQL .="WHERE pk = '".$id."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 
?>