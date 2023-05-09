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



$searchname = "";
if (empty($_GET["searchname"])) {
} else {
	$searchname = $_GET["searchname"];
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
						<b> จัดการรายวิชา &nbsp; </b>
					</div>
				</font>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="row">
		<div class=" col-lg-12 ">
			<div class="x_panel" style="background-color: #FFFFFF; ">


				<?php if (empty($_GET["page"])) {
					$sql = "SELECT * FROM teacher_copy Where  pk = '" . $_GET["CusID"] . "' ";
					$query = mysqli_query($objCon, $sql);
					while ($objResult = mysqli_fetch_array($query)) {
						$data1 = $objResult["data1"];
						$data2 = $objResult["data2"];
						$data3 = $objResult["data3"];
						$data4 = $objResult["data4"];
						$data5 = $objResult["data5"];
						$data6 = $objResult["data6"];
					}




				?>

					<form role="form" name="frmMain" method="post" action="save_class.php" enctype="multipart/form-data">


						<div class="row">

							<div class="col-lg-12 ">
								<div class="form-group">


									<div class="row">
										<div class="col-lg-3 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> รหัสวิชา </font>
												<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
											</div>
										</div>
										<div class="col-lg-3 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> ชื่อวิชา </font>
												<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data2; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
											</div>
										</div>
										<div class="col-lg-3 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> ชื่อวิชาภาษาอังกฤษ </font>
												<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
											</div>
										</div>

										<div class="col-lg-3 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> หน่วยกิตต่ำสุด </font>
												<input type="text" name="data4" id="data4" class="form-control " value="<?php echo $data4; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" readonly>
											</div>
										</div>
										<div class="col-lg-3 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> หน่วยกิตสูงสุด *ระบุหมวดหมู่ </font>
												<input type="text" name="data5" id="data5" class="form-control " value="<?php echo $data5; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; "> <!-- onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" -->
											</div>
										</div>
										<div class="col-lg-3 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> หน่วยกิตทั้งหมด </font>
												<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data6; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" readonly>
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
													$sql = "SELECT * FROM drop_type where s name = '" . $data9 . "'  order by pk asc  ";
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
												<font color="black" size="3px" class="serif"> เกรดเฉลี่ยขั้นต่ำในการสมัคร </font>
												<select class="form-control" id=" " name="grade_id" style=" border-radius: 10px; margin-top: 10px; " required>


													<?php

													$sql = "SELECT * FROM grade order by grade_id desc  ";
													$query = mysqli_query($objCon, $sql);
													while ($objResult = mysqli_fetch_array($query)) {

													?>
														<option value="<?php echo $objResult["grade_id"]; ?>"><?php echo $objResult["grade_name"]; ?></option>
													<?php
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

									<hr style=" border: 1px solid #003566; ">
									<div class="row">
										<div class="col-lg-6 " style="margin-top: 10px; margin-bottom: 10px; ">

											<table width="100%" border="1" hidden>
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

									<!-------------- ป.โท-เอก----------------------------------------->
									<!-------------- ป.โท-เอก----------------------------------------->
									<!-------------- ป.โท-เอก----------------------------------------->


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
															<input type="text" name="datachk30" id="datachk30" placeholder=" " value="<?php echo $datachk30; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
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
															<input type="text" name="datachk3" id="datachk3" placeholder=" " value="<?php echo $datachk3; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; " readonly>
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



									<!-------------- ป.ตรี----------------------------------------->
									<!-------------- ป.ตรี----------------------------------------->
									<!-------------- ป.ตรี----------------------------------------->


								</div>
							</div>
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
													<input type="text" name="b2" id="b2" placeholder="   " value="<?php echo $datachk4; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
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
													<input type="text" name="a5" placeholder="   " value="<?php echo $a5; ?>" class="form-control " autocomplete="off" style=" border-radius: 10px; " readonly>
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
										<!-- <tr>
											<td width="40%" >
												<div class="mt-3">
													<font size="3px" color="black" > &nbsp; คุณสมบัติอื่นๆ : GPA ของรายวิชาต้องมากกว่า </font>
												</div>
											</td>
											<td>
												<div class="mt-3">
													<input type="text" placeholder="" value="" name="grade" class="form-control " autocomplete="off" style=" border-radius: 10px; ">
												</div>
											</td>
											<td>
												<div>

												</div>
											</td>
										</tr> -->

									</table>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12 " align="left">
									<div class="form-group">
										<div align="left">
											<button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; ">
												<font color="white" size="3px" class="serif"> เพิ่มข้อมูล </font>
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

				<?php } ?>
				<br><Br><br><Br>
			</div>


		</div>
	</div>
</div>




<?php
include('footer2.php');
?>