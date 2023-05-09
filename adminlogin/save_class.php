<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
include("../db_config.php");

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$b5 = $_POST['b5'];

$update_img21 = $_FILES["img2"]["name"];

$update_img21 = " ";



$datepicker = $_POST["data12"];
$endate = $_POST["data13"];
$cut = explode("/", $datepicker);
$date_income = $cut[0] . "-" . $cut[1] . "-" . ($cut[2] - 543);

$cut2 = explode("/", $endate);
$date_income2 = $cut2[0] . "-" . $cut2[1] . "-" . ($cut2[2] - 543);


$daystart = date("Y-m-d", strtotime($date_income));
$dayend = date("Y-m-d", strtotime($date_income2));


$strSQL = "INSERT INTO classdata (
				data1, data2, data3, data4, data5, 
				data6, data7, data8, data9, data10, 
				data11, data12, data13, data14, 
				data15, data16,
				chk1, chk2, 
				startdate, enddate, data42, data32, 
				create_date, create_date2, create_by, create_time,
				datafile,
				
				chk3, datachk30, datachk31, chk4, datachk4, 
				datachk41, chk5, datachk5, datachk51,
				chk6, datachk6, datachk61 ,
				tri,datatri,tri2,datatri2,tri3,datatri3,tri4,datatri4,tri5,datatri5,grade
				) 
				VALUES 
				(
				'" . $_POST["data1"] . "','" . $_POST["data2"] . "',  '" . $_POST["data3"] . "',  '" . $_POST["data4"] . "',
				'" . $_POST["data5"] . "','" . $_POST["data6"] . "',  '" . $_POST["data7"] . "',  '" . $_POST["data8"] . "',
				'" . $_POST["data9"] . "','" . $_POST["data10"] . "',  
				'" . $_POST["data11"] . "','" . $_POST["data12"] . "', '" . $_POST["data13"] . "','" . $_POST["data14"] . "', 
				'" . $_POST["data15"] . "','" . $_POST["data16"] . "',  
				
				'" . $_POST["chk1"] . "','" . $_POST["chk2"] . "',   
				'" . $daystart . "','" . $dayend . "', '','',   
				
				 
				
				'" . date('d-m-Y') . "',  '" . date('Y-m-d') . "',
				'" . $_SESSION["UserID"] . "','" . date('H:i') . "', '" . $update_img21 . "', 
				
				
				'" . $_POST["chk3"] . "','" . $_POST["datachk30"] . "', '" . $_POST["datachk31"] . "','" . $_POST["chk4"] . "', '" . $_POST["datachk4"] . "', 
				'" . $_POST["datachk41"] . "','" . $_POST["chk5"] . "', '" . $_POST["datachk5"] . "','" . $_POST["datachk51"] . "', 
				'" . $_POST["chk6"] . "','" . $_POST["datachk6"] . "', '" . $_POST["datachk61"] . "' ,'$a1','$b1','$a2','$b2','$a3','$b3','$a4','$b4','$a5','$b5','$_POST[grade_id]'
				
				 
				
				)";


if (mysqli_query($objCon, $strSQL) === TRUE) {
	$last_id = $objCon->insert_id;
	// echo "New record created successfully. Last inserted ID is: " . $last_id;
	echo "<script>
					$(document).ready(function() {
						Swal.fire({
							title: 'สำเร็จ',
							text: 'กรุณาเพิ่มกลุ่มการสอนที่เมนู รายวิชาที่เปิดรับสมัคร',
							icon: 'success',
							timer: 3000,
							showConfirmButton: true
						});
					})
				</script>";

	header("refresh:5; url=dataclass.php?CusID=".$last_id."&page=1");
} else {
	echo "Error: " . $strSQL . "<br>" . $objQuery->error;
}

// $objQuery = mysqli_query($objCon, $strSQL);		 





//echo $strSQL;
//echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
//  echo("<script>window.location = 'dataclass.php';</script>");

?>