<?php
session_start();
$_SESSION["load"] = "10";
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

$cusId = isset($_get["cusID"]) ? $_get["cusID"] : "";

$searchname = "";
$_SESSION["showclassdata"] = "";

if (empty($_GET["classdata"])) {
} else {
	$searchname = $_GET["classdata"];
	$_SESSION["showclassdata"] = $_GET["classdata"];
}


if (isset($_GET["Action"])) {
	if ($_GET["Action"] == "Del") {
		$strSQL = "Delete From data_class  ";
		$strSQL .= "WHERE pk = '" . $_GET["CusID"] . "' ";
		$objQuery = mysqli_query($objCon, $strSQL);

		//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
		echo ("<script>window.location = 'classtest.php?classdata=" . $_GET["classdata"] . "';</script>");
	}
}



?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- page content -->
<div class="right_col" role="main" style="background-color: #F5FBFD; ">

	<div class="page-title">
		<div class=" ">
			<div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left">
				<font color="#000000" size="4px" class="serif2">
					<div style="margin-top: 10px;">
						<b> จัดการตารางสอน &nbsp; </b>
					</div>
				</font>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="row">
		<div class=" col-lg-12 ">
			<div class="x_panel" style="background-color: #FFFFFF; ">

				<!--- โหลดข้อมูลจากฐานข้อมูล --->

				<?php
				$chk1 = '';
				$chk2 = '';
				if (empty($_GET["page"])) {


					$sql = "SELECT * FROM classdata Where  pk = '" . $searchname . "' ";
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
					}

					$_SESSION["showclasscode"] = $data1;
					$_SESSION["showclasscode2"] = $data4;
					$_SESSION["showclasscode3"] = $data3;
					$_SESSION["showclasscode4"] = $data6;

				?>

					<link href="../select2.min.css" rel="stylesheet" />
					<script src="../select2.min.js"></script>



					<style>
						.downtopup {
							margin-top: 5px;
						}

						@media only screen and (min-width: 768px) {
							.downtopup {
								margin-top: 22px;
							}
						}
					</style>


					<form method="get" action="classtest.php" enctype="multipart/form-data">

						<input type="hidden" name="page" id="page" class="form-control " value="" autocomplete="off">

						<div class="row">
							<div class="col-lg-4 ">
								<div class="form-group">
									<font color="black" size="3px" class="serif"> ค้นหาวิชา </font>
									<select class="form-control  myselect" id="classdata" name="classdata" required>
										<option value=""> ค้นหาวิชา </option>
										<?php
										$sql2 = "SELECT * FROM classdata  order by pk asc ";
										$query2 = mysqli_query($objCon, $sql2);
										while ($objResult2 = mysqli_fetch_array($query2)) {
										?>
											<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data3"]; ?> </option>
										<?php
										}
										?>
									</select>
									<script type="text/javascript">
										$(".myselect").select2();
									</script>
								</div>
							</div>
							<div class="col-lg-8 ">
								<div class="form-group">
									<div class="downtopup"> </div>

									<button type="submit" class="btn btn-primary form-control" style="background-color: #4e6cef; border-radius: 5px; width: 110px; border-color: white; ">
										<font color="white" size="3px" class="serif"> ค้นหา </font>
									</button>

								</div>
							</div>
						</div>

					</form>



					<div class="row">

						<div class="col-lg-12 ">
							<div class="form-group">


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
													<font color="black" size="3px" class="serif"> ชื่อวิชาภาษาอังกฏษ </font>
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
													<font color="black" size="3px" class="serif"> หน่วยกิตสูงสุด </font>
													<input type="text" name="data5" id="data5" class="form-control " value="<?php echo $data5; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" readonly>
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
																<input type="checkbox" name="chk1" id="chk1" value="ปริญญาตรี" <?php if ((!$chk1 ? '' : $chk1) == "ปริญญาตรี") {
																																	echo "checked";
																																} ?> readonly>
																<span class="checkmark"></span>
															</label>
														</div>
														<div class="col-md-6 " style="margin-top: 5px; ">
															<label class="container2">
																<font color="black" size="3px" class="serif"> ปริญญาโท-เอก </font>
																<input type="checkbox" name="chk2" id="chk2" value="ปริญญาโท-เอก" <?php if ($chk2 == "ปริญญาโท-เอก ") {
																																		echo "checked";
																																	} ?> readonly>
																<span class="checkmark"></span>
															</label>
														</div>
													</div>

												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
													<input type="text" name="data7" id="data7" class="form-control " value="<?php echo $data7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required readonly>
												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ภาคการศึกษา </font>
													<select class="form-control" id="data8" name="data8" style=" border-radius: 10px; margin-top: 10px; " readonly disabled>
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

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> โครงการ </font>
													<select class="form-control" id="data9" name="data9" style=" border-radius: 10px; margin-top: 10px; " readonly disabled>
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

												</div>
											</div>


											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> มีความประสงค์เบิกค่าตอบแทน </font>
													<select class="form-control" id="data10" name="data10" style=" border-radius: 10px; margin-top: 10px; " readonly disabled>
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
													<select class="form-control" id="data11" name="data11" style=" border-radius: 10px; margin-top: 10px; " readonly disabled>
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
													<input type="text" name="data12" id="datepicker-th-2" class="form-control " value="<?php echo date('d/m') . "/" . (date('Y') + 543); ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
												</div>
											</div>

											<div class="col-lg-3 ">
												<div class="form-group"> <br>
													<font color="black" size="3px" class="serif"> ปิดรับสมัคร </font>
													<input type="text" name="data13" id="datepicker-th-3" class="form-control " value="<?php echo date('d/m') . "/" . (date('Y') + 543); ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
												</div>
											</div>
										</div>

									</div>
								</div>
								<hr>
							</div>
						</div>

					</div>


					<hr style=" border: 1px solid #003566; ">




					<form method="post" action="save_classtest.php" enctype="multipart/form-data">

						<input type="hidden" name="classdata" id="classdata" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off">

						<div class="col-lg-12 ">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-12 " style="margin-top: 10px; margin-bottom: 10px; ">

										<table width="70%" border="1">
											<tr></tr>
											<td width="20%" align="center">
												<font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน </font>
											</td>
											<td width="20%" align="center">
												<font color="black" size="3px" class="serif"> ระดับ </font>
											</td>
											<td width="20%" align="center">
												<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน </font>
											</td>
											<td width="25%" align="center">
												<font color="black" size="3px" class="serif"> โครงการ </font>

											</td width="15%" align="center">
											<td>

											</td>
											</tr>


											<?php
											if(isset($_GET['classdata'])){
											$sql_sec = "SELECT * FROM classdata_section
											LEFT JOIN section_type on section_type.section_type_id = classdata_section.section_type_id
											 where classdata_pk = $searchname";
											$query_sec = mysqli_query($objCon, $sql_sec);
											if (mysqli_num_rows($query_sec) > 0) {
												while ($objResult_sec = mysqli_fetch_array($query_sec)) {
											?>


													<tr>
														<td rowspan="2">
															<input disabled type="text" name="data14" id="data14" class="form-control " value="<?php echo $objResult_sec['data14']; ?>" placeholder=" กลุ่มที่ " autocomplete="off" style=" border-radius: 0px; ">
														</td>
														<td>
															<font color="black" size="3px" class="serif"> &nbsp; ปริญญาตรี </font>
														</td>
														<td>
															<input disabled type="text" name="data15" id="data15" class="form-control " value="<?php echo $objResult_sec['data15'] ?>" autocomplete="off" style=" border-radius: 0px; ">
														</td>
														<td rowspan="2">
															<select class="form-control" disabled>
																<option value="<?php echo $objResult_sec["section_type_id"]; ?>"><?php echo $objResult_sec["section_type_name"]; ?></option>

															</select>

														</td>
														<td rowspan="2" class="text-center"><a href="<?php echo '/college5/adminlogin/classtest.php?classdata=' . $_GET['classdata'] . '&sec=' . $objResult_sec['data14']; ?>" class="btn btn-outline-success ml-2">ดูเวลา</a>

														</td>


													</tr>
													<tr>
														<td>
															<font color="black" size="3px" class="serif"> &nbsp; ปริญญาโท-เอก </font>
														</td>

														<td>

															<input disabled type="text" name="data16" id="data16" class="form-control " value="<?php echo $objResult_sec['data16']; ?>" autocomplete="off" style=" border-radius: 0px; ">

														</td>
													</tr>
													<tr>

														<td colspan="4" style="background-color: gray;"></td>

													</tr>




											<?php
												}
											} else {
												echo "ไม่พบข้อมูลกลุ่ม";
											}
										}
											?>
											<tr class="text-center">

												<td colspan="4"> <a style="color: green;" href="<?php echo "/college5/adminlogin/classtest.php?classdata=" . $_GET['classdata'] ?>">ดูเวลาของทุกกลุ่มการเรียน </a> </td>

											</tr>











										</table>

									</div>
								</div>
								<div class="row">
									<div class="col-lg-2 ">
										<div class="form-group"> <br>
											<font color="black" size="3px" class="serif"> เลือกวัน </font>
											<select class="form-control" id="data1" name="data1" style=" border-radius: 10px; margin-top: 10px; ">
												<?php
												$sql = "SELECT * FROM dropday order by pk asc  ";
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
									<div class="col-lg-2 ">
										<div class="form-group"> <br>
											<font color="black" size="3px" class="serif"> เลือกเวลาเริ่ม </font>
											<select class="form-control" id="data2" name="data2" style=" border-radius: 10px; margin-top: 10px; ">
												<?php
												$sql = "SELECT * FROM droptime  order by pk asc  ";
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
									<div class="col-lg-2 ">
										<div class="form-group"> <br>
											<font color="black" size="3px" class="serif"> เลือกเวลาสิ้นสุด </font>
											<select class="form-control" id="data3" name="data3" style=" border-radius: 10px; margin-top: 10px; ">
												<?php
												$sql = "SELECT * FROM droptime   order by pk asc  ";
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
									<div class="col-lg-1 ">
										<div class="form-group"> <br>
											<font color="black" size="3px" class="serif"> กลุ่มที่ </font>
											<!-- <input type="text" name="data14" id="data14" class="form-control " value="<?php echo $data14; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required> -->
											<select class="form-control" id="data6" name="data6" style=" border-radius: 10px; margin-top: 10px; ">
												<?php
												$sql = "SELECT * FROM classdata_section where classdata_pk = $searchname order by data14 asc";
												$query = mysqli_query($objCon, $sql);
												while ($objResult = mysqli_fetch_array($query)) {
												?>
													<option value="<?php echo $objResult["data14"]; ?>"><?php echo $objResult["data14"]; ?></option>
												<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-lg-1 ">
										<div class="form-group"> <br>
											<font color="black" size="3px" class="serif"> ตึก </font>
											<select class="form-control" id="data4" name="data4" style=" border-radius: 10px; margin-top: 10px; ">
												<?php
												$sql = "SELECT * FROM drop_build   order by pk asc  ";
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
									<div class="col-lg-1 ">
										<div class="form-group"> <br>
											<font color="black" size="3px" class="serif"> ห้อง </font>
											<input type="text" name="data5" id="data5" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
										</div>
									</div>

									<div class="col-lg-2 ">
										<div class="form-group">
											<div class="downtopup2"> </div>

											<button type="submit" class="btn btn-primary form-control" style="background-color: #4e6cef; border-radius: 5px; width: 110px; border-color: white; ">
												<font color="white" size="3px" class="serif"> เพิ่ม </font>
											</button>


										</div>
									</div>
								</div>

								<style>
									.downtopup2 {
										margin-top: 5px;
									}

									@media only screen and (min-width: 768px) {
										.downtopup2 {
											margin-top: 52px;
										}
									}
								</style>






							</div>
						</div>


					</form>
					<br>
					<p id='cuar_reply_0'></p>

					<?php
					$_GET['iddata'] = $searchname;


					include("table_schedule.php"); ?>

					<!-- <div class="table-responsive" >  	
					<table class="table table-bordered tablemobile" >
					<thead>
					<tr>
						<th width="40%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black" color="black"> Day / Time </font></div></th>
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 08.00-08.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 08.30-09.00 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 09.00-09.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 09.30-10.00 </font></div></th>  
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 10.00-10.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 10.30-11.00 </font></div></th>  
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 11.00-11.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 11.30-12.00 </font></div></th> 
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 12.00-12.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 12.30-13.00 </font></div></th>  
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 13.00-13.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 13.30-14.00 </font></div></th> 
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 14.00-14.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 14.30-15.00 </font></div></th> 
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 15.00-15.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 16.30-17.00 </font></div></th>  
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 18.00-18.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 18.30-19.00 </font></div></th> 
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 19.00-19.30 </font></div></th>    
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 19.30-20.00 </font></div></th>  
					</tr>
					</thead>
					 <tbody>
						<?php
						$sc_numStep = "60";
						$i = 1;
						$sql = "SELECT * FROM dropday order by pk asc ";
						$query = mysqli_query($con, $sql);
						while ($objResult = mysqli_fetch_array($query)) {
						?>
						<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">    
						<td><div align="center"><font size="2px" color="Black"> <?php echo $objResult["name"]; ?></font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 08.00-08.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 08.30-09.00 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 09.00-09.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 09.30-10.00 </font></div></td>  
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 10.00-10.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 10.30-11.00 </font></div></td>  
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 11.00-11.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 11.30-12.00 </font></div></td> 
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 12.00-12.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 12.30-13.00 </font></div></td>  
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 13.00-13.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 13.30-14.00 </font></div></td> 
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 14.00-14.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 14.30-15.00 </font></div></td> 
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 15.00-15.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 16.30-17.00 </font></div></td>  
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 18.00-18.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 18.30-19.00 </font></div></td> 
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 19.00-19.30 </font></div></td>    
						<td width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> 19.30-20.00 </font></div></td>  
						
						</tr> 
						<?php
							$i++;
						}
						?> 
					</tbody>
					</table> 
				    </div> -->


					<br>
					<hr style=" border: 1px solid #003566; ">

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black" color="black"> วัน </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> เวลาเริ่ม </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> เวลาสิ้นสุด </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> ลบ </font>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<!--- โหลดตาราง สอน  --->
								<?php
								$i = 1;
								$sql = "SELECT dc.iddata,dc.pk,dd.name as day_name ,dts.name as time_start,dte.name as end_time FROM data_class as dc
							left join dropday as dd ON dd.pk = dc.data1
							left join droptime as dts ON dts.pk = dc.data2 
							left join droptime as dte ON dte.pk = dc.data3 
							where  iddata = '" . $searchname . "' order by pk desc ";
								$query = mysqli_query($con, $sql);
								while ($objResult = mysqli_fetch_array($query)) {
									$namedata1 = $objResult["day_name"];
									$namedata2 = $objResult["time_start"];
									$namedata3 = $objResult["end_time"];

								?>
									<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedata1; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedata2; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedata3; ?></font>
											</div>
										</td>


										<td align="center">
											<div align="center">

												<a class="btn btn-danger" href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"]; ?>?Action=Del&CusID=<?php echo $objResult["pk"]; ?>&classdata=<?php echo $searchname; ?>';}">
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
				<?php } ?>




				<br><Br><br><Br>
			</div>
		</div>
	</div>
</div>




<?php
include('footer.php');
?>