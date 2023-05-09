<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
header('Content-Type: text/html; charset=UTF-8');
include('../db_config.php');
  
	   $check_image = $_FILES["filUpload"]["name"];
	   if ($ext != 'csv') {
		echo "<script>
					$(document).ready(function() {
						Swal.fire({
							title: 'เกิดข้อผิดพลาด',
							text: 'กรุณาอัพโหลดไฟล์ที่เป็น .csv !',
							icon: 'error',
							timer: 5000,
							showConfirmButton: true
						});
					})
				</script>";
		header("refresh:3; url=dataclass2.php");
	}else{
		if(empty($check_image)){
			$check_image = "";
		}else{
			$check_image = date('d-m-Y')."-".rand(1,99).$_FILES["filUpload"]["name"];
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"uploads/".$check_image))
			{ 
			} 
		}


				$strSQL = " Delete From teacher_copy2  "; 
				$objQuery = mysqli_query($objCon,$strSQL); 
	
		
?>

<html>
<head>
<title>Read CSV</title>
</head>
<body> 
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php 
$textname = "uploads/".$check_image; 
$objCSV = fopen($textname, 'r');
	$check_loop = 1;
	$conti = 1 ; 
?>
       
<?php
while (($objArr = fgetcsv($objCSV, 1000, ',')) !== FALSE) {
	$true_f = $objArr[0];
	   
	 if($check_loop == 1){ 
		 $check_loop ++;
	 }else{  
		$check_loop ++; 
		 
		 echo $objArr[0] . $objArr[1] . " <br> ";
		 
		 $strSQL = "INSERT INTO teacher_copy2 (
		 data1, data2,  data3,  
		 data4, data5 
		 ) VALUES (
		  '".$objArr[0]."',  '".$objArr[1]."',   '".$objArr[2]."',  
		  '".$objArr[3]."',  '".$objArr[4]."'  
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		   
		  
		 
	 	}
}fclose($objCSV); 
	
		 echo("<script>window.location = 'profile2.php';</script>");
	}
?>	
</body>
</html>
 