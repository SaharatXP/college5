<?php
session_start();
$_SESSION["load"] = "2";
include('header.php');



$searchname = "";

if (empty($_GET["CusID"])) {
} else {
	$searchname = $_GET["CusID"];
	$_SESSION["showclassdata"] = $_GET["CusID"];
}

?>

<style>
	/* The container */
	.container2 {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 13px;
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
		height: 23px;
		width: 23px;
		background-color: #A9A9A9;
	}

	/* On mouse-over, add a grey background color */
	.container2:hover input~.checkmark {
		background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.container2 input:checked~.checkmark {
		background-color: #FF0000;
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
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}
</style>

<div id="wrapper" class="container">
	<div class="row">
		<div class="col-md-12">


			<?php
			$i = 1;
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

				$chk3 = $objResult["chk3"];
				$datachk3 = $objResult["datachk3"];
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

			$_SESSION["showclasscode"] = $data1;
			$_SESSION["showclasscode2"] = $data4;
			$_SESSION["showclasscode3"] = $data3;
			$_SESSION["showclasscode4"] = $data6;

			//// โหลดข้อมูลการเพิ่ม วิชา 
			$sql = "SELECT * FROM classdata where pk = '" . $_GET["CusID"] . "'  order by pk desc ";
			$query = mysqli_query($con, $sql);
			while ($objResult = mysqli_fetch_array($query)) {

				/// โหลดข้อมูลชื่อ อาจารย์ 
				$namedata5 = "";
				$sql4 = "SELECT * FROM member  where pk = '" . $objResult["data5"] . "' ";
				$query4 = mysqli_query($objCon, $sql4);
				while ($objResult4 = mysqli_fetch_array($query4)) {
					$namedata5 = $objResult4["name"];
				}

			?>
				<div class="row" align="left">
					<div class="col-lg-12" align="left">
						<div class="announce-item">
							

								<div class="row">

									<div class="col-lg-12 ">
										<div class="form-group">

											<div class="row">
												<div class="col-lg-12 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> รายละเอียด </font> <br>
														<font color="black" size="3px" class="serif"> <?php echo  $data1 . " " . $data3 . " " . $data2; ?> </font> <br>

														<div class="row">
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
																	<font color="black" size="3px" class="serif"> ชื่อวิชาภาษาอังกฏษ </font>
																	<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
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

															<div class="col-lg-12 "> </div>

															<div class="col-lg-4 ">
																<div class="form-group"> <br>
																	<font color="black" size="3px" class="serif"> ระดับการศึกษา </font>
																	<div class="row">
																		<div class="col-md-6 " style="margin-top: 5px; ">
																			<label class="container2">
																				<font color="black" size="3px" class="serif"> ปริญญาตรี </font>
																				<input type="checkbox" name="chk1" disabled id="chk1" value="ปริญญาตรี" <?php if ($chk1 == "ปริญญาตรี") {
																																							echo "checked";
																																						} ?>>
																				<span class="checkmark"></span>
																			</label>
																		</div>
																		<div class="col-md-6 " style="margin-top: 5px; ">
																			<label class="container2">
																				<font color="black" size="3px" class="serif"> ปริญญาโท-เอก </font>
																				<input type="checkbox" name="chk2" disabled id="chk2" value="ปริญญาโท-เอก " <?php if ($chk2 == "ปริญญาโท-เอก ") {
																																								echo "checked";
																																							} ?>>
																				<span class="checkmark"></span>
																			</label>
																		</div>
																	</div>

																</div>
															</div>
															<div class="col-lg-12 "> </div>

															<div class="col-lg-3 ">
																<div class="form-group"> <br>
																	<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
																	<input type="text" name="data7" id="data7" class="form-control " value="<?php echo $data7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required readonly>
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
																	</select>

																</div> -->
																<div class="col-lg-3 ">
																<div class="form-group"> <br>
																	<font color="black" size="3px" class="serif"> เกรดขั้นต่ำในการรับสมัคร </font>
																	<select class="form-control" id="data9" name="data9" style=" border-radius: 10px; margin-top: 10px; ">
																		
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
																	</select>
																</div>
															</div>


															<div class="col-lg-12 "> </div>




															<div class="col-lg-5 ">
																<div class="form-group"> <br>
																	<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอนที่เปิดรับสมัคร </font>
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
																			<td rowspan="2" valign="middle" align="center">

																				<font color="black" size="3px" class="serif"> &nbsp; <?php echo $data14; ?> </font>

																			</td>
																			<td>

																				<font color="black" size="3px" class="serif"> &nbsp; ปริญญาตรี </font>


																			</td>
																			<td align="center">
																				<font color="black" size="3px" class="serif"> &nbsp; <?php echo $data15; ?> </font>

																			</td>
																		</tr>
																		<tr>
																			<td>

																				<font color="black" size="3px" class="serif"> &nbsp; บัณฑิตศึกษา </font>

																			</td>
																			<td align="center">
																				<font color="black" size="3px" class="serif"> &nbsp; <?php echo $data16; ?> </font>

																			</td>
																		</tr>
																	</table>
																	<table width="100%" border="1">


																		<?php
																		$sql_sec = "SELECT * FROM classdata_section where classdata_pk = $_GET[CusID]";
																		$query_sec = mysqli_query($objCon, $sql_sec);
																		if (mysqli_num_rows($query_sec) > 1) {


																			while ($objResult_sec = mysqli_fetch_array($query_sec)) {
																		?>
																				<tr></tr>
																				<td width="35%" align="center">
																					<font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน </font>
																				</td>
																				<td width="35%" align="center">
																					<font color="black" size="3px" class="serif"> ระดับ </font>
																				</td>
																				<td width="35%" align="center">
																					<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน </font>
																				</td>

																				<!-- <td rowspan="3" class="text-center"><a href="del_section.php?" class="btn btn-outline-danger ml-2">ลบ</a></td> -->

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
																				<div class="col-lg-4 ">
																					<div class="form-group"> <br>
																						<!-- <font color="black" size="3px" class="serif"> กลุ่มที่ต้องการสมัคร </font> -->
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
																			</tr>


																		<?php
																		} else {
																			echo "<br><b style='color:red'>ยังไม่มีกลุ่มวิชา</b>";
																		}
																		?>



																		<tr>
																			<!-- <td colspan="3" class="text-center"><a href="./add_sec.php?CusID=<?php echo $_GET['CusID'] ?>" type="submit" class="btn btn-outline-success ml-2 mt-2" name="addsec">+ เพิ่มข้อมูลกลุ่ม</a></td> -->
																		</tr>





																	</table>
																</div>
															</div>

															<div class="col-lg-12 "> </div>




															<div class="col-lg-3 ">
																<div class="form-group"> <br>
																	<font color="black" size="3px" class="serif"> เปิดรับสมัคร </font>
																	<input type="text" name="data12" id="datepicker-th-2" class="form-control " value="<?php echo $data12; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
																</div>
															</div>

															<div class="col-lg-3 ">
																<div class="form-group"> <br>
																	<font color="black" size="3px" class="serif"> ปิดรับสมัคร </font>
																	<input type="text" name="data13" id="datepicker-th-3" class="form-control " value="<?php echo $data13; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly>
																</div>
															</div>


														</div>
													</div>

												</div>
											</div>
										</div>










									</div>
								</div>




								<hr style=" border: 1px solid #003566; ">


								<?php $_GET['iddata'] = $searchname;  ?>

								<iframe src="../adminlogin/classtest2.php?classdata=<?php echo $_GET["CusID"]; ?>" style="border: 0; width: 100%; height: 550px; overflow-x: scroll; overflow-y: scroll;"> </iframe>
								<br>












							</font>
						</div>
					</div>
				</div>

			<?php } ?>



		</div>
	</div>

</div>

<?php
include('footer.php');
?>