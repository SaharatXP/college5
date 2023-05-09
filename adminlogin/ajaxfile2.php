<?php
require '../db_config.php'; 

$target_dir = "uploads/";
 
 
$target_file2 =  "img1122".rand(1,999)."model".date('dmY').rand(1,9999).".jpg"; 
if (move_uploaded_file($_FILES["file"]["tmp_name"],  $target_dir .$target_file2)) {

			$strSQL = "INSERT INTO images2 (img, bill_no) VALUES  ('".$target_file2."', '')";  
			$objQuery = mysqli_query($objCon, $strSQL); 
 
	echo $target_file2;	
}else{
	echo 0;
} 
die;

?>
