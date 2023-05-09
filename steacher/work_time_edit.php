<?php
session_start();
$_SESSION["load"] = "8";
include('header.php');


$sql2 = "SELECT * FROM student_paper where pk = '" . $_GET["CusID"] . "' ";
$query2 = mysqli_query($con, $sql2);
while ($objResult2 = mysqli_fetch_array($query2)) {
	$secg = substr($objResult2["section_group"], 0, -1);

	$subject_save = $objResult2["subject"];
	$sql = "SELECT * FROM classdata Where  pk = '" . $objResult2["subject"] . "' ";
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
		$datachk3 = $objResult["datachk30"];
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
	}
}

$savedata1 = "";
$savedata2 = "";
$savedata3 = "";
$savedata4 = "";
$savedata5 = "";
$savedata6 = "";
$savedata7 = "";

$sql2 = "SELECT * FROM work_time where pk = '" . $_GET["Idel"] . "' ";
$query2 = mysqli_query($con, $sql2);
while ($objResult2 = mysqli_fetch_array($query2)) {
	$savedata1 = $objResult2["savedata1"];
	$savedata2 = $objResult2["savedata2"];
	$savedata3 = $objResult2["savedata3"];
	$savedata4 = $objResult2["savedata4"];
	$savedata5 = $objResult2["savedata5"];
	$savedata6 = $objResult2["savedata6"];
	$savedata7 = $objResult2["savedata7"];
}

?>





<div id="wrapper" class="container">
	<h1 id="page-title"> บันทึกการทำงาน </h1>
	<div class="row">

		<div class="row">
			<div class="col-md-12">
				<div class="announce-item">



					<div class="row">
						<div class="col-lg-12 ">
							<div class="form-group">

								<form role="form" name="frmMain" method="post" action="save_work_time_update.php" enctype="multipart/form-data">
									<input type="hidden" id="CusID" name="CusID" value="<?php echo $_GET["CusID"]; ?>">
									<input type="hidden" id="subject" name="subject" value="<?php echo $subject_save; ?>">
									<input type="hidden" id="pkupdate" name="pkupdate" value="<?php echo $_GET["Idel"]; ?>">

									<div class="row">
										<div class="col-lg-12 ">
											<div class="form-group"> <br>
												<font color="black" size="3px" class="serif"> รายละเอียด </font> <br>
												<font color="black" size="3px" class="serif"> <?php echo  $data1 . " " . $data3 . " " . $data2; ?> </font> <br>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> รหัสวิชา </font>
														<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data1 . " " . $data2; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
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
														<font color="black" size="3px" class="serif"> หน่วยกิตต่ำสุด </font>
														<input type="text" name="data4" id="data4" class="form-control " value="<?php echo $data4; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> หน่วยกิตสูงสุด </font>
														<input type="text" name="data5" id="data5" class="form-control " value="<?php echo $data5; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> หน่วยกิตทั้งหมด </font>
														<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data6; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
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
														</select>
													</div>
												</div>
												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
														<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
													</div>
												</div>

												<div class="col-lg-12 ">
													<hr>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> วันเดือนปี </font>
														<input type="date" name="savedata1" id="savedata1" class="form-control " value="<?php echo $savedata1; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
													</div>
												</div>
												<div class="col-lg-12 "> </div>
												<div class="col-lg-2 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ลงเวลาปฎิบัติงาน เริ่มต้น </font>
														<input type="time" name="savedata2" id="savedata2" class="form-control " value="<?php echo $savedata2; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ลงเวลาปฎิบัติงาน สิ้นสุด </font>
														<input type="time" name="savedata3" id="savedata3" class="form-control " value="<?php echo $savedata3; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> โครงการ (ปกติ/พิเศษ) </font>
														<select class="form-control" id="savedata4" name="savedata4" style=" border-radius: 10px; margin-top: 10px; ">
															<?php
															$sql = "SELECT * FROM drop_type where name = '" . $savedata4 . "'  order by pk asc  ";
															$query = mysqli_query($objCon, $sql);
															while ($objResult = mysqli_fetch_array($query)) {
															?>
																<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option>
															<?php
															}
															?> <?php
																$sql = "SELECT * FROM drop_type where name != '" . $savedata4 . "'  order by pk asc  ";
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
														<font color="black" size="3px" class="serif"> Section </font>
														<select class="form-control" id="section" name="section" style=" border-radius: 10px; margin-top: 10px; ">
															<?php
															$sql_sec = "SELECT * FROM classdata_section
												LEFT JOIN section_type on section_type.section_type_id = classdata_section.section_type_id
												where classdata_pk = $subject_save AND data14 IN ($secg)";
															// echo $sql_sec;
															$query_sec = mysqli_query($objCon, $sql_sec);
															while ($objResult_sec = mysqli_fetch_array($query_sec)) {
															?>
																<option value="<?php echo $objResult_sec["data14"]; ?>"><?php echo $objResult_sec["data14"]; ?></option>

															<?php
															} ?>
														</select>
													</div>
												</div>
												<div class="col-lg-12 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> จำนวนขั่วโมงปฎิบัติงาน </font>
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="form-group">
														<font color="black" size="3px" class="serif"> บรรยาย (ชั่วโมง) </font>
														<input type="text" name="savedata5" id="savedata5" class="form-control " value="<?php echo $savedata5; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="form-group">
														<font color="black" size="3px" class="serif"> ปฎิบัติงาน (ชั่วโมง) </font>
														<input type="text" name="savedata6" id="savedata6" class="form-control " value="<?php echo $savedata6; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
												<div class="col-lg-12 "> </div>
												<div class="col-lg-6 ">
													<div class="form-group">
														<font color="black" size="3px" class="serif"> งานที่ปฎิบัติ </font>
														<textarea type="text" name="savedata7" id="savedata7" class="form-control " value="<?php echo $savedata7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " rows="5"><?php echo $savedata7; ?></textarea>
													</div>
												</div>

												<div class="col-lg-12" align="left">
													<div class="col-lg-12" align="left">
														<div class="form-group">

															<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4; margin-top: 15px; " data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>">
																<font color="#000000" size="3px" class="serif1"> เพิ่มข้อมูล </font>
															</button>

															<a href="work_time.php?CusID=<?php echo $_GET["CusID"]; ?>">
																<button type="button" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  ">
																	<font color="#000000" size="3px" class="serif1"> ยกเลิก </font>
																</button> </a>


														</div>
													</div>
												</div>

								</form>


							</div>
						</div>
					</div>


				</div>
			</div>
		</div>






		<br><br><bR><br>
	</div>
</div>
</div>


</div>
</div>

<?php
include('footer.php');
?>