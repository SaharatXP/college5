<?php
header('Content-Type: application/json');
include('../database.php');
	 
	$id = $_POST["data1"];  
	$data1 = $_POST["data2"];    
	$menuid = $_POST["data3"];    
	$data2 = $_POST["data4"];    
 
			 
			$strSQL = "Update data_class Set data1 = '".$data1."',
			data2 = '".$data2."' "  ;
			$strSQL .=" WHERE  pk = '".$id."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
				
				$data = array(
				   'ans' => "0" 
				); 
				    
	 
echo json_encode($data);
?>