<?php
require '../db_config.php'; 

$target_dir = "uploads/"; // Upload directory

$request = 1;
if(isset($_POST['request'])){
	$request = $_POST['request'];
}

// Upload file
if($request == 1){
	$target_file = $request.".jpg";

	$msg = "";
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$target_file)) {
	    //$msg = "Successfully uploaded";
		 
		$strSQL = "INSERT INTO images2 (img, bill_no) VALUES  ('".$target_file."', '')";  
		$objQuery = mysqli_query($objCon, $strSQL);
		
		
	}else{
	    $msg = "Error while uploading";
	}
	echo $msg;
}

// Remove file
if($request == 2){
	$filename =  $_POST['name']; 
	 
		$strSQL = " Delete From images2  ";
		$strSQL .=" WHERE img = '".$filename."' ";
		$objQuery = mysqli_query($objCon,$strSQL); 
	
	unlink($filename); exit;
}

?>