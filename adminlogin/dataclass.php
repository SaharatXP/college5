<?php
session_start();
$_SESSION["load"] = "3";
include('header.php');

$data1 = "";
$data2 = "";
$data3 = "";
$data4 = "";
$data5 = "";
$data6 = "";
$data7 = "";
$data8 = "";
$data9 = "";
$data10 = "";



$name = "";
$title = "";
$detail = "";
$searchname = '';



$searchname = "";
if (empty($_GET["searchname"])) {
} else {
	$searchname = $_GET["searchname"];
}

$searchname2 = "";
if (empty($_GET["data8"])) {
} else {
	$searchname2 = $_GET["data8"];
}
$searchname3 = "";
if (empty($_GET["data9"])) {
} else {
	$searchname3 = $_GET["data9"];
}
$searchname4 = "";
if (empty($_GET["data10"])) {
} else {
	$searchname4 = $_GET["data10"];
}


/// ฟังชั่นในการลบข้อมูล 
if (isset($_GET["Action"])) {
	if ($_GET["Action"] == "Del") {
		$strSQL = "Delete From classdata  ";
		$strSQL .= "WHERE pk = '" . $_GET["CusID"] . "' ";
		$objQuery = mysqli_query($objCon, $strSQL);

		//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
		echo ("<script>window.location = 'dataclass.php';</script>");
	}
}

?>
<style>
	/* The container */
	.container2 {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	/* Hide the browser's default checkbox */
	.container2 input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
		height: 0;
		width: 0;
	}

	/* Create a custom checkbox */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 22px;
		width: 22px;
		background-color: #FFFFFF;
		border-radius: 5px;
		border: 2px solid #707070;
	}

	/* On mouse-over, add a grey background color */
	.container2:hover input~.checkmark {
		background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.container2 input:checked~.checkmark {
		background-color: #707070;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.container2 input:checked~.checkmark:after {
		display: block;
	}

	/* Style the checkmark/indicator */
	.container2 .checkmark:after {
		left: 7px;
		top: 3px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}
</style>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- page content -->
<div class="right_col" role="main" style="background-color: #F5FBFD; ">

	<div class="page-title">
		<div class=" ">
			<div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left">
				<font color="#000000" size="4px" class="serif2">
					<div style="margin-top: 10px;">
						<b> จัดการรายวิชา &nbsp; แก้ไขกลุ่มการสอน</b>
					</div>
				</font>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="row">
		<div class=" col-lg-12 ">
			<div class="x_panel" style="background-color: #FFFFFF; ">


				<?php if (empty($_GET["page"])) { ?>


					<div class="col-lg-12" style="display: none;">
						<form role="form" name="frmMain" method="post" action="save_class_update.php" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-12 ">

									<div class="col-lg-12 ">
										<div class="form-group">
											<div class="row">
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> รหัสวิชา </font>
														<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ชื่อวิชา </font>
														<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data2; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ชื่อวิชาภาษาอังกฏษ </font>
														<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> หน่วยกิตต่ำสุด </font>
														<input type="text" name="data4" id="data4" class="form-control " value="<?php echo $data4; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> หน่วยกิตสูงสุด </font>
														<input type="text" name="data5" id="data5" class="form-control " value="<?php echo $data5; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> หน่วยกิตทั้งหมด </font>
														<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data6; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
													</div>
												</div>
												<div class="col-lg-12 "> </div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ระดับการศึกษา </font>
														<div class="row">
															<div class="col-md-6 " style="margin-top: 5px; ">
																<label class="container2">
																	<font color="black" size="3px" class="serif"> ปริญญาตรี </font>
																	<input type="radio" name="chk1" id="chk1" value="ปริญญาตรี" <?php if ($chk1 == "ปริญญาตรี") {
																																	echo "checked";
																																} ?>>
																	<span class="checkmark"></span>
																</label>
															</div>
															<div class="col-md-6 " style="margin-top: 5px; ">
																<label class="container2">
																	<font color="black" size="3px" class="serif"> ปริญญาโท-เอก </font>
																	<input type="radio" name="chk2" id="chk2" value="ปริญญาโท-เอก " <?php if ($chk2 == "ปริญญาโท-เอก ") {
																																		echo "checked";
																																	} ?>>
																	<span class="checkmark"></span>
																</label>
															</div>
														</div>

													</div>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
														<input type="text" name="data7" id="data7" class="form-control " value="<?php echo $data7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
													</div>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ภาคการศึกษา </font>
														<select class="form-control" id="data8" name="data8" style=" border-radius: 10px; margin-top: 10px; ">
															<?php
															$sql = "SELECT * FROM drop_term where s name = '" . $data8 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?>
															<?php
															$sql = "SELECT * FROM drop_term where  name != '" . $data8 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?>
														</select>

													</div>
												</div>

												<!-- <div class="col-lg-3 mt-3">


													<font color="black" size="3px" class="serif mt-3"> เกรดขั้นต่ำในการรับสมัคร </font>
													<select class="form-control" id="grade" name="grade_id" style=" border-radius: 10px; margin-top: 10px; ">
														<option value="<?php echo $grade; ?>"><?php echo $data["grade_name"]; ?></option>

														<?php
														$sqlx = "SELECT * FROM grade";
														$queryz = mysqli_query($objCon, $sqlx);

														while ($objResultx = mysqli_fetch_array($queryz)) {
															if ($grade != $objResultx["grade_id"]) {
														?>

																<option value="<?php echo $objResultx["grade_id"]; ?>"><?php echo $objResultx["grade_name"]; ?></option>
														<?php
															}
														}
														?>
													</select>



												</div> -->


												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> มีความประสงค์เบิกค่าตอบแทน </font>
														<select class="form-control" id="data10" name="data10" style=" border-radius: 10px; margin-top: 10px; ">
															<?php
															$sql = "SELECT * FROM drop_other where s name = '" . $data10 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?>
															<?php
															$sql = "SELECT * FROM drop_other where  name != '" . $data10 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?>
														</select>

													</div>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> อาจารย์ประจำวิชา </font>
														<select class="form-control" id="data11" name="data11" style=" border-radius: 10px; margin-top: 10px; ">
															<?php
															$sql = "SELECT * FROM member where status = 'AJ' and pk = '" . $data11 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?>
															<?php
															$sql = "SELECT * FROM member where status = 'AJ' and pk != '" . $data11 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?>
														</select>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-12 ">

												</div>

												<link type="text/css" href="calenthai/css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />
												<script type="text/javascript" src="calenthai/js/jquery-1.4.4.min.js"></script>
												<script type="text/javascript" src="calenthai/js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
												<script type="text/javascript">
													$(function() {
														var d = new Date();
														var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear() + 543);


														// กรณีต้องการใส่ปฏิทินลงไปมากกว่า 1 อันต่อหน้า ก็ให้มาเพิ่ม Code ที่บรรทัดด้านล่างด้วยครับ (1 ชุด = 1 ปฏิทิน)

														$("#datepicker-th").datepicker({
															dateFormat: 'dd/mm/yy',
															isBuddhist: true,
															defaultDate: toDay,
															dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
															dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
															monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
															monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
														});

														$("#datepicker-th-2").datepicker({
															changeMonth: true,
															changeYear: true,
															dateFormat: 'dd/mm/yy',
															isBuddhist: true,
															defaultDate: toDay,
															dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
															dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
															monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
															monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
														});

														$("#datepicker-th-3").datepicker({
															changeMonth: true,
															changeYear: true,
															dateFormat: 'dd/mm/yy',
															isBuddhist: true,
															defaultDate: toDay,
															dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
															dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
															monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
															monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
														});

														$("#datepicker-en").datepicker({
															dateFormat: 'dd/mm/yy'
														});

														$("#inline").datepicker({
															dateFormat: 'dd/mm/yy',
															inline: true
														});


													});
												</script>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> เปิดรับสมัคร </font>
														<input type="text" name="data12" id="datepicker-th-2" class="form-control " value="<?php echo date('d/m') . "/" . (date('Y') + 543); ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ปิดรับสมัคร </font>
														<input type="text" name="data13" id="datepicker-th-3" class="form-control " value="<?php echo date('d/m') . "/" . (date('Y') + 543); ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-6 " style="margin-top: 10px; margin-bottom: 10px; ">


													<table width="100%" border="1">
														<tr>
															<td width="35%" align="center">
																<font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน </font>
															</td>
															<td width="35%" align="center">
																<font color="black" size="3px" class="serif"> ระดับ </font>
															</td>
															<td width="35%" align="center">
																<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน </font>
															</td>
														</tr>
														<tr>
															<td rowspan="2">

																<input type="text" name="data14" id="data14" class="form-control " value="<?php echo $data14; ?>" placeholder=" กลุ่มที่ " autocomplete="off" style=" border-radius: 0px; ">

															</td>
															<td>

																<font color="black" size="3px" class="serif"> &nbsp; ปริญญาตรี </font>


															</td>
															<td>

																<input type="text" name="data15" id="data15" class="form-control " value="<?php echo $data15; ?>" autocomplete="off" style=" border-radius: 0px; ">

															</td>
														</tr>
														<tr>
															<td>

																<font color="black" size="3px" class="serif"> &nbsp; ปริญญาโท-เอก </font>

															</td>
															<td>

																<input type="text" name="data16" id="data16" class="form-control " value="<?php echo $data16; ?>" autocomplete="off" style=" border-radius: 0px; ">

															</td>
														</tr>
													</table>

												</div>
											</div>





											<div class="row" style="margin-top: 15px;">
												<style>
													input.larger {
														width: 17px;
														height: 17px;
														vertical-align: middle;
														margin-top: -3px;
													}
												</style>
												<div class="col-lg-5">
													<table width="100%" border="0">
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> ชั่วโมงบรรยาย </font> </label>
																</div>
															</td>
															<td>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> ช่วยตรวจงาน </font>
																		<input type="checkbox" name="chk3" id="chk3" value="ช่วยตรวจงาน" <?php if ($chk3 == "ช่วยตรวจงาน") {
																																				echo "checked";
																																			} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk3" id="datachk3" placeholder="   " value="<?php echo $datachk3; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk31" id="datachk31" placeholder="   " value="<?php echo $datachk31; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>


														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> เช็คชื่อ/ใบงาน </font>
																		<input type="checkbox" name="chk4" id="chk4" value="เช็คชื่อ/ใบงาน" <?php if ($chk4 == "เช็คชื่อ/ใบงาน") {
																																				echo "checked";
																																			} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk4" id="datachk4" placeholder="   " value="<?php echo $datachk4; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk41" id="datachk41" placeholder="   " value="<?php echo $datachk41; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>


														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> อื่นๆระบุ </font>
																		<input type="checkbox" name="chk5" id="chk5" value="อื่นๆระบุ " <?php if ($chk5 == "อื่นๆระบุ ") {
																																			echo "checked";
																																		} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk5" id="datachk5" placeholder="   " value="<?php echo $datachk5; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>
																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk51" id="datachk51" placeholder="   " value="<?php echo $datachk51; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>
													</table>
												</div>
												<div class="col-lg-5">
													<table width="100%" border="0">
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> ชั่วโมงปฎิบัติการ </font> </label>
																</div>
															</td>
															<td>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> จำนวนชั่วโมง </font>
																		<input type="checkbox" name="chk6" id="chk6" value="จำนวนชั่วโมง" <?php if ($chk6 == "จำนวนชั่วโมง") {
																																				echo "checked";
																																			} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk6" id="datachk6" placeholder="   " value="<?php echo $datachk6; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk61" id="datachk61" placeholder="   " value="<?php echo $datachk61; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>
													</table>
												</div>




												<div class="col-lg-6" style="margin-top: 10px; margin-bottom: 10px; ">
													<table width="100%" border="0">
														<tr>
															<td width="40%">
																<div>
																	<font size="3px" color="black"> &nbsp; รวมชั่วโมงการทํางานของผู้ช่วยสอน </font>
																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk3" id="datachk3" placeholder="  " value="<?php echo $datachk30; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp;&nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> &nbsp; (ภาระงานของผู้ช่วยสอนรวมไม่น้อยกว่า 10 ชั่วโมง แต่ไม่เกิน 12 ชั่วโมง/สัปดาห์) </font>
																</div>
															</td>
														</tr>

													</table>
												</div>
											</div>

										</div>
									</div>

									<br>
									<div class="row">
										<div class="col-lg-12 " align="left">
											<div class="col-lg-12 " align="left">
												<div class="form-group">
													<div align="left">

														<a href="dataclass2.php">
															<button type="button" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 180px; border-color: white; ">
																<font color="white" size="3px" class="serif"> อัพโหลดไฟล์ Execel </font>
															</button> </a>


														<button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; ">
															<font color="white" size="3px" class="serif"> เพิ่มข้อมูล </font>
														</button>



														<button type="reset" class="btn btn-danger" style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; ">
															<font color="black" size="3px" class="serif"> ยกเลิก </font>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</form>

						<div class="col-lg-12">

							<hr style=" border: 1px solid #003566; ">
							<br>
						</div>
					</div>

					<form role="form" name="frmMain" method="get" action="dataclass.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12">
								<div class="col-lg-2 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> รหัสวิชา-ชื่อวิชา </font>
										<select class="form-control" id="data10" name="data10" style=" border-radius: 10px; ">
											<?php if (empty($searchname4)) { ?>
												<option value=""> รหัสวิชา-ชื่่อวิชา </option>
											<?php } ?>
											<?php
											$sql = "SELECT * FROM classdata where  pk = '" . $searchname4 . "' order by pk asc  ";
											$query = mysqli_query($objCon, $sql);
											while ($objResult = mysqli_fetch_array($query)) {
											?>
												<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["data1"] . " " . $objResult["data2"]; ?></option>
											<?php
											}
											?>
											<?php
											$sql = "SELECT * FROM classdata where  pk != '" . $searchname4 . "'  order by pk asc  ";
											$query = mysqli_query($objCon, $sql);
											while ($objResult = mysqli_fetch_array($query)) {
											?>
												<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["data1"] . " " . $objResult["data2"]; ?></option>
											<?php
											}
											?>
										</select> <br>
									</div>
								</div>
								<div class="col-lg-2 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> ระดับการศึกษา </font>
										<select class="form-control" id="data8" name="data8" style=" border-radius: 10px; ">
											<?php if (empty($searchname2)) { ?>
												<option value=""> ระดับการศึกษา </option>
											<?php } ?>
											<?php
											$sql = "SELECT * FROM drop_subject where  name = '" . $searchname2 . "'  order by pk asc  ";
											$query = mysqli_query($objCon, $sql);
											while ($objResult = mysqli_fetch_array($query)) {
											?>
												<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
											<?php
											}
											?>
											<?php
											$sql = "SELECT * FROM drop_subject where  name != '" . $searchname2 . "'  order by pk asc  ";
											$query = mysqli_query($objCon, $sql);
											while ($objResult = mysqli_fetch_array($query)) {
											?>
												<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
											<?php
											}
											?>
										</select> <br>
									</div>
								</div>
								<div class="col-lg-2 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
										<input placeholder="ปีการศึกษา" type="number" name="year" id="year" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off" style=" border-radius: 10px; "> <br>
									</div>
								</div>
								
								<div class="col-lg-2 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> ภาคการศึกษา </font>
										<select class="form-control" id="data9" name="data9" style=" border-radius: 10px;  ">
											<?php if (empty($searchname3)) { ?>
												<option value=""> ภาคการศึกษา </option>
											<?php } ?>
											<?php
											$sql = "SELECT * FROM drop_term where name = '" . $searchname3 . "'  order by pk asc  ";
											$query = mysqli_query($objCon, $sql);
											while ($objResult = mysqli_fetch_array($query)) {
											?>
												<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
											<?php
											}
											?>
											<?php
											$sql = "SELECT * FROM drop_term where  name != '" . $searchname3 . "'  order by pk asc  ";
											$query = mysqli_query($objCon, $sql);
											while ($objResult = mysqli_fetch_array($query)) {
											?>
												<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
											<?php
											}
											?>
										</select> <br>
									</div>
								</div>
								<div class="col-lg-3 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> &nbsp;&nbsp; <br> </font>
										<button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 10px; width: 80px; border-color: white; ">
											<font color="white" size="3px" class="serif"> ค้นหา </font>
										</button>

										<a href="dataclass.php">
											<button type="button" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 10px; width: 110px; border-color: white; ">
												<font color="white" size="3px" class="serif"> แสดงทั้งหมด </font>
											</button>
										</a>

									</div>
								</div>
							</div>
						</div>
					</form>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black" color="black"> รหัสวิชา </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> ชื่อวิชา </font>
										</div>
									</th>

									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> หน่วยกิต </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> อาจารย์ประจำวิชา </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> เทอม </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> ปีการศึกษา </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> แก้ไข-ลบ </font>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								if (empty($_GET["data8"])) {
									$addcode = '';
								} else {
									$addcode = "and (chk1 = '$_GET[data8]' or chk2 = '$_GET[data8]') ";
								}
								if (empty($_GET["year"])) {
									$addcode2 = '';
								} else {
									$addcode2 = "and data7 = $_GET[year] ";
								}
								if (empty($_GET["data10"])) {
									$addcode3 = '';
								} else {
									$addcode3 = "and pk = '" . $_GET["data10"] . "' ";
								}

								if (empty($_SESSION["subject"])) {
									$subject = '';
								} else {
									$subject = "and b.subject = '$_SESSION[subject]'";
								}

								//// โหลดข้อมูลการเพิ่ม วิชา 
								$sql = "SELECT * FROM classdata where  
								data2 like '%" . $searchname . "%' 
								$addcode $addcode3 $addcode2
								$subject 
								
								order by pk desc ";

								// echo $sql;


								$query = mysqli_query($con, $sql);
								while ($objResult = mysqli_fetch_array($query)) {

									/// โหลดข้อมูลชื่อ อาจารย์ 
									$namedata5 = "";
									$sql4 = "SELECT * FROM member  where pk = '" . $objResult["data11"] . "' ";
									$query4 = mysqli_query($objCon, $sql4);
									while ($objResult4 = mysqli_fetch_array($query4)) {
										$namedata5 = $objResult4["name"];
									}


									$namedata8 = "";
									$sql4 = "SELECT * FROM drop_term  where name = '" . $objResult["data8"] . "' ";
									$query4 = mysqli_query($objCon, $sql4);
									while ($objResult4 = mysqli_fetch_array($query4)) {
										$namedata8 = $objResult4["name"];
									}


									$namedata9 = "";
									$sql4 = "SELECT * FROM drop_type  where name = '" . $objResult["data9"] . "' ";
									$query4 = mysqli_query($objCon, $sql4);
									while ($objResult4 = mysqli_fetch_array($query4)) {
										$namedata9 = $objResult4["name"];
									}

									$sql4 = "SELECT * FROM member  where pk = '" . $objResult["data11"] . "' ";
									$query4 = mysqli_query($objCon, $sql4);
									while ($objResult5 = mysqli_fetch_array($query4)) {
										$namedatat = $objResult5["name"];
									}




								?>
									<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $objResult["data1"]; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $objResult["data2"]; ?></font>
											</div>
										</td>

										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $objResult["data6"]; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedatat; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedata8; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $objResult["data7"]; ?></font>
											</div>
										</td>


										<td align="center">
											<div align="center"><a class="btn  btn-sm btn-warning" href="dataclass.php?CusID=<?php echo $objResult["pk"]; ?>&page=1">
													<font size="2px"> แก้ไข </font>
												</a>

												<a class="btn btn-sm btn-danger" href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"]; ?>?Action=Del&CusID=<?php echo $objResult["pk"]; ?>';}">
													<font size="2px"> ลบ </font>
												</a> </a>
											</div>
										</td>


									</tr>
								<?php
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>


					<br><Br><br><Br>
					<br><Br><br><Br>
					<br><Br><br><Br>
					<br><Br><br><Br>
					<br><Br><br><Br>
					<br><Br><br><Br>
					<?php }

				if (isset($_GET["page"])) {
					if ($_GET["page"] == "1") {
						$sql = "SELECT * , grade.grade_name as grade_name FROM classdata 
						LEFT JOIN grade on grade.grade_id = classdata.grade
						Where  pk = '" . $_GET["CusID"] . "' ";
						$query = mysqli_query($objCon, $sql);
						while ($objResult = mysqli_fetch_array($query)) {
							$data1 = $objResult["data1"];
							$data2 = $objResult["data2"];
							$data3 = $objResult["data3"];
							$data4 = $objResult["data4"];
							$data5 = $objResult["data5"];
							$data6 = $objResult["data6"];
							$data7 = $objResult["data7"];
							$data8 = $objResult["data8"];
							$data9 = $objResult["data9"];
							$data10 = $objResult["data10"];
							$datafile = $objResult["datafile"];
							$data11 = $objResult["data11"];
							$data12 = $objResult["data12"];
							$data13 = $objResult["data13"];
							$data14 = $objResult["data14"];
							$data15 = $objResult["data15"];
							$data16 = $objResult["data16"];
							$chk1 = $objResult["chk1"];
							$chk2 = $objResult["chk2"];
							$startdate = $objResult["startdate"];
							$enddate = $objResult["enddate"];
							$data42 = $objResult["data42"];
							$data32 = $objResult["data32"];

							$chk3 = $objResult["chk3"];
							$datachk30 = $objResult["datachk30"];
							$datachk31 = $objResult["datachk31"];
							$chk4 = $objResult["chk4"];
							$datachk4 = $objResult["datachk4"];
							$datachk41 = $objResult["datachk41"];
							$chk5 = $objResult["chk5"];
							$datachk5 = $objResult["datachk5"];
							$datachk51 = $objResult["datachk51"];
							$chk6 = $objResult["chk6"];
							$datachk6 = $objResult["datachk6"];
							$datachk61 = $objResult["datachk61"];

							$a1 = $objResult["tri"];
							$a2 = $objResult["tri2"];
							$a3 = $objResult["tri3"];
							$a4 = $objResult["tri4"];
							$a5 = $objResult["tri5"];
							$b1 = $objResult["datatri"];
							$b2 = $objResult["datatri2"];
							$b3 = $objResult["datatri3"];
							$b4 = $objResult["datatri4"];
							$b5 = $objResult["datatri5"];
							$grade = $objResult["grade"];
							$grade_name = $objResult["grade_name"];
						}
					?>

						<form role="form" name="frmMain" method="post" action="save_class_update.php" enctype="multipart/form-data">

							<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>">

							<div class="row">

								<div class="col-lg-12 ">
									<div class="form-group">


										<div class="row">
											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> รหัสวิชา </font>
													<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
												</div>
											</div>
											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ชื่อวิชา </font>
													<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data2; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
												</div>
											</div>
											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ชื่อวิชาภาษาอังกฏษ </font>
													<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> หน่วยกิตต่ำสุด </font>
													<input type="text" name="data4" id="data4" class="form-control " value="<?php echo $data4; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
												</div>
											</div>
											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> หน่วยกิตสูงสุด </font>
													<input type="text" name="data5" id="data5" class="form-control " value="<?php echo $data5; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
												</div>
											</div>
											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> หน่วยกิตทั้งหมด </font>
													<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data6; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
												</div>
											</div>
											<div class="col-lg-12 "> </div>
											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ระดับการศึกษา </font>
													<div class="row">
														<div class="col-md-6 " style="margin-top: 5px; ">
															<label class="container2">
																<font color="black" size="3px" class="serif"> ปริญญาตรี </font>
																<input type="checkbox" name="chk1" id="chk1" value="ปริญญาตรี" <?php if ($chk1 == "ปริญญาตรี") {
																																	echo "checked";
																																} ?>>
																<span class="checkmark"></span>
															</label>
														</div>
														<div class="col-md-6 " style="margin-top: 5px; ">
															<label class="container2">
																<font color="black" size="3px" class="serif"> ปริญญาโท-เอก </font>
																<input type="checkbox" name="chk2" id="chk2" value="ปริญญาโท-เอก " <?php if ($chk2 == "ปริญญาโท-เอก ") {
																																		echo "checked";
																																	} ?>>
																<span class="checkmark"></span>
															</label>
														</div>
													</div>

												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
													<input type="text" name="data7" id="data7" class="form-control " value="<?php echo $data7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ภาคการศึกษา </font>
													<select class="form-control" id="data8" name="data8" style=" border-radius: 10px; margin-top: 10px; ">
														<?php
														$sql = "SELECT * FROM drop_term where  name = '" . $data8 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
														<?php
														$sql = "SELECT * FROM drop_term where  name != '" . $data8 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
													</select>

												</div>
											</div>

											<!-- <div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> โครงการ </font>
													<select class="form-control" id="data9" name="data9" style=" border-radius: 10px; margin-top: 10px; ">
														<?php
														$sql = "SELECT * FROM drop_type where  name = '" . $data9 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
														<?php
														$sql = "SELECT * FROM drop_type where  name != '" . $data9 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
													</select>

												</div> -->
											<div class="col-lg-3 ">
												<div class="form-group"> <br>

													<font color="black" size="3px" class="serif mt-3"> เกรดขั้นต่ำในการรับสมัคร </font>
													<select class="form-control" id="grade" name="grade_id" style=" border-radius: 10px; margin-top: 10px; ">
														<option value="<?php echo $grade; ?>"><?php echo $grade_name; ?></option>

														<?php
														$sqlx = "SELECT * FROM grade";
														$queryz = mysqli_query($objCon, $sqlx);

														while ($objResultx = mysqli_fetch_array($queryz)) {
															if ($grade != $objResultx["grade_id"]) {
														?>

																<option value="<?php echo $objResultx["grade_id"]; ?>"><?php echo $objResultx["grade_name"]; ?></option>
														<?php
															}
														}
														?>
													</select>
												</div>


											</div>


											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> มีความประสงค์เบิกค่าตอบแทน </font>
													<select class="form-control" id="data10" name="data10" style=" border-radius: 10px; margin-top: 10px; ">
														<?php
														$sql = "SELECT * FROM drop_other where  name = '" . $data10 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
														<?php
														$sql = "SELECT * FROM drop_other where  name != '" . $data10 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
													</select>

												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> อาจารย์ประจำวิชา </font>
													<select class="form-control" id="data11" name="data11" style=" border-radius: 10px; margin-top: 10px; ">
														<?php
														$sql = "SELECT * FROM member where status = 'AJ' and pk = '" . $data11 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
														<?php
														$sql = "SELECT * FROM member where status = 'AJ' and pk != '" . $data11 . "'  order by pk asc  ";
														$query = mysqli_query($objCon, $sql);
														while ($objResult = mysqli_fetch_array($query)) {
														?>
															<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option>
														<?php
														}
														?>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-12 ">

											</div>

											<link type="text/css" href="calenthai/css/ui-lightness/jquery-ui-1.8.10.custom.css" rel="stylesheet" />
											<script type="text/javascript" src="calenthai/js/jquery-1.4.4.min.js"></script>
											<script type="text/javascript" src="calenthai/js/jquery-ui-1.8.10.offset.datepicker.min.js"></script>
											<script type="text/javascript">
												$(function() {
													var d = new Date();
													var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear() + 543);


													// กรณีต้องการใส่ปฏิทินลงไปมากกว่า 1 อันต่อหน้า ก็ให้มาเพิ่ม Code ที่บรรทัดด้านล่างด้วยครับ (1 ชุด = 1 ปฏิทิน)

													$("#datepicker-th").datepicker({
														dateFormat: 'dd/mm/yy',
														isBuddhist: true,
														defaultDate: toDay,
														dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
														dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
														monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
														monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});

													$("#datepicker-th-2").datepicker({
														changeMonth: true,
														changeYear: true,
														dateFormat: 'dd/mm/yy',
														isBuddhist: true,
														defaultDate: toDay,
														dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
														dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
														monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
														monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});

													$("#datepicker-th-3").datepicker({
														changeMonth: true,
														changeYear: true,
														dateFormat: 'dd/mm/yy',
														isBuddhist: true,
														defaultDate: toDay,
														dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
														dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
														monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
														monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});

													$("#datepicker-en").datepicker({
														dateFormat: 'dd/mm/yy'
													});

													$("#inline").datepicker({
														dateFormat: 'dd/mm/yy',
														inline: true
													});


												});
											</script>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> เปิดรับสมัคร </font>
													<input type="text" name="data12" id="datepicker-th-2" class="form-control " value="<?php echo $data12; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ปิดรับสมัคร </font>
													<input type="text" name="data13" id="datepicker-th-3" class="form-control " value="<?php echo $data13; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-lg-6 " style="margin-top: 10px; margin-bottom: 10px; ">

												<table width="100%" border="1">


													<?php
													$sql_sec = "SELECT * FROM classdata_section
                                LEFT JOIN section_type on section_type.section_type_id = classdata_section.section_type_id
                                 where classdata_pk = $_GET[CusID] ";
													$query_sec = mysqli_query($objCon, $sql_sec);
													while ($objResult_sec = mysqli_fetch_array($query_sec)) {
													?>
														<tr></tr>
														<td width="25%" align="center">
															<font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน </font>
														</td>
														<td width="25%" align="center">
															<font color="black" size="3px" class="serif"> ระดับ </font>
														</td>
														<td width="25%" align="center">
															<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน </font>
														</td>
														<td width="25%" align="center">
															<font color="black" size="3px" class="serif"> โครงการ </font>
														</td>




														<!-- <td rowspan="3" class="text-center"><a href="add_section.php" class="btn btn-outline-secondary ml-2"  >+</a></td> -->

														</tr>
														<tr>
															<td rowspan="2">
																<input disabled type="text" name="data14" id="data14" class="form-control " value="<?php echo $objResult_sec['data14']; ?>" placeholder=" กลุ่มที่ " autocomplete="off" style=" border-radius: 0px; ">
															</td>
															<td>
																<font color="black" size="3px" class="serif"> &nbsp; ปริญญาตรี </font>
															</td>
															<td>
																<input disabled type="text" name="data15" id="data15" class="form-control " value="<?php echo $objResult_sec['data15']; ?>" autocomplete="off" style=" border-radius: 0px; ">
															</td>
															<td rowspan="2">
																<select class="form-control" disabled>
																	<option value="<?php echo $objResult_sec["section_type_id"]; ?>"><?php echo $objResult_sec["section_type_name"]; ?></option>

																</select>

															</td>

														</tr>
														<tr>
															<td>
																<font color="black" size="3px" class="serif"> &nbsp; ปริญญาโท-เอก </font>
															</td>
															<td>

																<input disabled type="text" name="data16" id="data16" class="form-control " value="<?php echo $objResult_sec['data16'];; ?>" autocomplete="off" style=" border-radius: 0px; ">

															</td>


														</tr>
													<?php
													}

													?>




													<tr>
														<td colspan="3" class="text-center"><a href="./add_sec.php?CusID=<?php echo $_GET['CusID'] ?>" type="submit" class="btn btn-outline-success ml-2 mt-2" name="addsec">+ เพิ่มข้อมูลกลุ่ม</a></td>
													</tr>





												</table>

											</div>
										</div>

										<!-- ------------------------------------------------------------------------- -->
										<!-- ----------------------------- ป.โท - เอก -------------------------------- -->
										<!-- ------------------------------------------------------------------------- -->
										<?php if (empty($_SESSION["subject"]) || $_SESSION["subject"] == 'ปริญญาโท-เอก') { ?>
											<div class="h2"> เฉพาะผู้ช่วยอาจารย์ระดับปริญญาโท-เอก </div>
											<div class="row" style="margin-top: 10px;">
												<style>
													input.larger {
														width: 17px;
														height: 17px;
														vertical-align: middle;
														margin-top: -3px;
													}
												</style>
												<div class="col-lg-5">
													<table width="100%" border="0">

														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> ช่วยสอน </font>
																		<input type="checkbox" name="chk3" id="chk3" value="ช่วยสอน" <?php if ($chk3 == "ช่วยสอน") {
																																			echo "checked";
																																		} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk30" placeholder=" " value="<?php echo $datachk30; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk31" id="datachk31" placeholder="  " value="<?php echo $datachk31; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>


														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> ช่วยเตรียมการสอน </font>
																		<input type="checkbox" name="chk4" id="chk4" value="ช่วยเตรียมการสอน" <?php if ($chk4 == "ช่วยเตรียมการสอน") {
																																					echo "checked";
																																				} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk4" id="datachk4" placeholder="   " value="<?php echo $datachk4; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk41" id="datachk41" placeholder="   " value="<?php echo $datachk41; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>

													</table>
												</div>
												<div class="col-lg-5">
													<table width="100%" border="0">

														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> ตรวจแบบทดสอบ </font>
																		<input type="checkbox" name="chk5" id="chk5" value="ตรวจแบบทดสอบ " <?php if ($chk5 == "ตรวจแบบทดสอบ ") {
																																				echo "checked";
																																			} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk5" id="datachk5" placeholder="   " value="<?php echo $datachk5; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk51" id="datachk51" placeholder="   " value="<?php echo $datachk51; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> อื่นๆระบุ </font>
																		<input type="checkbox" name="chk6" id="chk6" value="อื่นๆระบุ" <?php if ($chk6 == "อื่นๆระบุ") {
																																			echo "checked";
																																		} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk6" id="datachk6" placeholder=" " value="<?php echo $datachk6; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<font size="3px" color="black"> &nbsp; กิจกรรมที่ปฎิบัติ </font>

																</div>
															</td>
															<td colspan="1">
																<div>
																	<input type="text" name="datachk61" id="datachk61" placeholder="   " value="<?php echo $datachk61; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
														</tr>
													</table>
												</div>




												<div class="col-lg-6" style="margin-top: 10px; margin-bottom: 10px; ">
													<table width="100%" border="0">
														<tr>
															<td width="40%">
																<div>
																	<font size="3px" color="black"> &nbsp; รวมชั่วโมงการทํางานของผู้ช่วยสอน </font>
																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="datachk3" id="datachk3" placeholder=" " value="<?php echo number_format(0 + (!$datachk30 ? 0 :  $datachk30) + (!$datachk4 ? 0 : $datachk4)  + (!$datachk5 ? 0 : $datachk5) + (!$datachk6 ? 0 : $datachk6)); ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; " disabled>
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp;&nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> &nbsp; (ภาระงานของผู้ช่วยสอนรวมไม่น้อยกว่า 10 ชั่วโมง แต่ไม่เกิน 12 ชั่วโมง/สัปดาห์) </font>
																</div>
															</td>
														</tr>

													</table>
												</div>
											</div>
										<?php
										}

										?>


										<!-- ------------------------------------------------------------------------- -->
										<!-- -------------------------------- ป.ตรี ----------------------------------- -->
										<!-- ------------------------------------------------------------------------- -->
										<?php if (empty($_SESSION["subject"]) || $_SESSION["subject"] == 'ปริญญาตรี') { ?>
											<div class="h2"> เฉพาะผู้ช่วยอาจารย์ระดับปริญญาตรี </div> </label><br>
											<div class="row" style="margin-top: 10px;">
												<style>
													input.larger {
														width: 17px;
														height: 17px;
														vertical-align: middle;
														margin-top: -3px;
													}
												</style>
												<div class="col-lg-5">
													<table width="100%" border="0">
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> ชั่วโมงบรรยาย </font> </label>
																</div>
															</td>
															<td>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> ช่วยตรวจงาน </font>
																		<input type="checkbox" name="a1" value="ช่วยตรวจงาน" <?php if ($a1 == "ช่วยตรวจงาน") {
																																	echo "checked";
																																} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="b1" placeholder="   " value="<?php echo $b1; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>



														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> เช็คชื่อ / ใบงาน </font>
																		<input type="checkbox" name="a2" value="เช็คชื่อ / เก็บใบงาน" <?php if ($a2 == "เช็คชื่อ / เก็บใบงาน") {
																																			echo "checked";
																																		} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="b2" id="b2" placeholder="   " value="<?php echo $b2; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> อื่นๆ </font>
																		<input type="checkbox" name="a3" value="อื่นๆ" <?php if ($a3 == "อื่นๆ") {
																															echo "checked";
																														} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="b3" placeholder="   " value="<?php echo $b3; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>

													</table>
												</div>
												<div class="col-lg-5">
													<table width="100%" border="0">
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> ชั่วโมงปฎิบัติการ </font> </label>
																</div>
															</td>
															<td>
															</td>
														</tr>
														<tr>
															<td>
																<div>

																	<label class="container2" style="margin-top: 10px;">
																		<font color="black" size="3px" class="serif"> จำนวนชั่วโมง </font>
																		<input type="checkbox" name="a4" value="จำนวนชั่วโมง" <?php if ($a4 == "จำนวนชั่วโมง") {
																																	echo "checked";
																																} ?>>
																		<span class="checkmark"></span>
																	</label>

																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="b4" placeholder=" " value="<?php echo $b4; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>

													</table>
												</div>




												<div class="col-lg-6" style="margin-top: 10px; margin-bottom: 10px; ">
													<table width="100%" border="0">
														<tr>
															<td width="40%">
																<div>
																	<font size="3px" color="black"> &nbsp; รวมชั่วโมงการทํางานของผู้ช่วยสอน </font>
																</div>
															</td>
															<td>
																<div>
																	<input type="text" name="a5" placeholder="   " value="<?php echo number_format(0 + (!$b1 ? 0 : $b1) + (!$b2 ? 0 : $b2) + (!$b3 ? 0 : $b3) + (!$b4 ? 0 : $b4)); ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; " disabled>
																</div>
															</td>
															<td>
																<div>
																	<font size="3px" color="black"> &nbsp;&nbsp; ชั่วโมง/ต่อสัปดาห์ </font>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div>
																	<font size="3px" color="black"> &nbsp; (ภาระงานของผู้ช่วยสอนรวมไม่น้อยกว่า 10 ชั่วโมง แต่ไม่เกิน 12 ชั่วโมง/สัปดาห์) </font>
																</div>
															</td>
														</tr>



													</table>
												</div>
											</div>
										<?php
										}
										?>

									</div>

								</div>
								<br>
								<div class="row">
									<div class="col-lg-12 " align="left">
										<div class="form-group">
											<div align="left">
												<button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; ">
													<font color="white" size="3px" class="serif"> แก้ไข </font>
												</button>

												<a href="dataclass.php">
													<button type="button" class="btn btn-danger" style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; ">
														<font color="black" size="3px" class="serif"> ยกเลิก </font>
													</button> </a>
											</div>
										</div>
									</div>
								</div>

						</form>

				<?php }
				} ?>
				<br><Br><br><Br>
			</div>


		</div>
	</div>

</div>




<?php
include('footer2.php');
?>