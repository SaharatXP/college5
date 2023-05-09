<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

include("../db_config.php");



$update_img11 = "";


$datepicker = $_POST["data12"];
$endate = $_POST["data13"];
$cut = explode("/", $datepicker);
$date_income = $cut[0] . "-" . $cut[1] . "-" . ($cut[2] - 543);

$cut2 = explode("/", $endate);
$date_income2 = $cut2[0] . "-" . $cut2[1] . "-" . ($cut2[2] - 543);


$daystart = date("Y-m-d", strtotime($date_income));
$dayend = date("Y-m-d", strtotime($date_income2));


$strSQL = "Update classdata Set 
					data1 = '" . $_POST["data1"] . "', 
					data2 = '" . $_POST["data2"] . "', 
					data3 = '" . $_POST["data3"] . "', 
					data4 = '" . $_POST["data4"] . "', 
					data5 = '" . $_POST["data5"] . "', 
					data6 = '" . $_POST["data6"] . "', 
					data7 = '" . $_POST["data7"] . "', 
					data8 = '" . $_POST["data8"] . "', 
					data9 = '" . $_POST["data9"] . "', 
					data11 = '" . $_POST["data11"] . "', 
					data12 = '" . $_POST["data12"] . "', 
					data13 = '" . $_POST["data13"] . "', 
					data14 = '" . $_POST["data14"] . "', 
					data15 = '" . $_POST["data15"] . "', 
					data16 = '" . $_POST["data16"] . "', 
					chk1 = '" . $_POST["chk1"] . "', 
					chk2 = '" . $_POST["chk2"] . "', 
					
					chk3 = '" . $_POST["chk3"] . "', 
					datachk30 = '" . $_POST["datachk30"] . "', 
					datachk31 = '" . $_POST["datachk31"] . "', 
					chk4 = '" . $_POST["chk4"] . "', 
					datachk4 = '" . $_POST["datachk4"] . "', 
					datachk41 = '" . $_POST["datachk41"] . "', 
					chk5 = '" . $_POST["chk5"] . "', 
					datachk5 = '" . $_POST["datachk5"] . "', 
					datachk51 = '" . $_POST["datachk51"] . "', 
					chk6 = '" . $_POST["chk6"] . "', 
					datachk6 = '" . $_POST["datachk6"] . "', 
					chk2 = '" . $_POST["chk2"] . "', 
					datachk61 = '" . $_POST["datachk61"] . "',  
					
					tri = '" . $_POST["a1"] . "',
					tri2 = '" . $_POST["a2"] . "',
					tri3 = '" . $_POST["a3"] . "',
					tri4 = '" . $_POST["a4"] . "',
					tri5 = '" . $_POST["a5"] . "',
					datatri = '" . $_POST["b1"] . "',
					datatri2 = '" . $_POST["b2"] . "',
					datatri3 = '" . $_POST["b3"] . "',
					datatri4 = '" . $_POST["b4"] . "',
					datatri5 = '" . $_POST["b5"] . "',
					grade = '" . $_POST["grade_id"] . "',


					startdate = '" . $daystart . "', 
					enddate = '" . $dayend . "' " . $update_img21save;
$strSQL .= " WHERE pk = '" . $_POST["idupdate"] . "' ";

// $objQuery = mysqli_query($objCon, $strSQL); 

if (mysqli_query($objCon, $strSQL) === TRUE) {
	// $last_id = $objCon->insert_id;
	// echo "New record created successfully. Last inserted ID is: " . $last_id;
	echo "<script>
									$(document).ready(function() {
										Swal.fire({
											title: 'แก้ไขสำเร็จ',
											text: 'กรุณาเพิ่มตารางสอน ในเมนูจัดการตารางสอน',
											icon: 'success',
											timer: 7000,
											showConfirmButton: true
										});
									})
								</script>";

	header("refresh:5; url=classtest.php?page=&classdata=" . $_POST["idupdate"]);
} else {
	echo "Error: " . $strSQL . "<br>" . $objQuery->error;
}

//echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
//  echo("<script>window.location = 'dataclass.php';</script>");


?>