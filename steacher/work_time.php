<?php
session_start();
$_SESSION["load"] = "8";
include('header.php');
$datachk3 = '';
$addcode2 = '';


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




if (isset($_GET["Action"])) {

	if ($_GET["Action"] == "Del2") {
		$strSQL = "Delete From work_time  ";
		$strSQL .= "WHERE pk = '" . $_GET["Idel"] . "'  ";
		
		$objQuery = mysqli_query($objCon, $strSQL);

		//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
		echo ("<script>window.location = 'work_time.php?CusID=" . $_GET["CusID"] . "';</script>");
	}
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

								<form role="form" name="frmMain" method="post" action="save_work_time.php" enctype="multipart/form-data">
									<input type="hidden" id="CusID" name="CusID" value="<?php echo $_GET["CusID"]; ?>">
									<input type="hidden" id="subject" name="subject" value="<?php echo $subject_save; ?>">

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
														<font color="black" size="3px" class="serif"> ปีการศึกษา </font>
														<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data7; ?>" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " readonly onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
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

												

												<div class="col-lg-12 ">
													<hr>
												</div>

												<div class="col-lg-3 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> วันเดือนปี </font>
														<input type="date" name="savedata1" id="savedata1" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
													</div>
												</div>
												<div class="col-lg-12 "> </div>
												<div class="col-lg-2 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ลงเวลาปฎิบัติงาน เริ่มต้น </font>
														<input type="time" name="savedata2" id="savedata2" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="form-group"> <br>
														<font color="black" size="3px" class="serif"> ลงเวลาปฎิบัติงาน สิ้นสุด </font>
														<input type="time" name="savedata3" id="savedata3" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " required>
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
												}?>
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
														<input type="text" name="savedata5" id="savedata5" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="form-group">
														<font color="black" size="3px" class="serif"> ปฎิบัติงาน (ชั่วโมง) </font>
														<input type="text" name="savedata6" id="savedata6" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; ">
													</div>
												</div>
												<div class="col-lg-12 "> </div>
												<div class="col-lg-6 ">
													<div class="form-group">
														<font color="black" size="3px" class="serif"> งานที่ปฎิบัติ </font>
														<textarea type="text" name="savedata7" id="savedata7" class="form-control " value="" autocomplete="off" style=" border-radius: 10px; margin-top: 10px; " rows="5"></textarea>
													</div>
												</div>

												<div class="col-lg-12" align="left">
													<div class="col-lg-12" align="left">
														<div class="form-group">

															<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4; margin-top: 15px; " data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>">
																<font color="#000000" size="3px" class="serif1"> เพิ่มข้อมูล </font>
															</button>

															<button type="button" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  ">
																<font color="#000000" size="3px" class="serif1"> ยกเลิก </font>
															</button>


														</div>
													</div>
												</div>

								</form>


								<div class="col-lg-12 ">
									<hr>
								</div>


								<div class="col-md-12" style="margin-top: 15px;">
									<style>
										.pagination {
											list-style-type: none;
											display: inline-flex;
											justify-content: space-between;
											box-sizing: border-box;
										}

										.pagination li {
											box-sizing: border-box;
											padding-right: 10px;
										}

										.pagination li a {
											box-sizing: border-box;
											background-color: #e2e6e6;
											padding: 8px;
											text-decoration: none;
											font-size: 12px;
											font-weight: bold;
											color: #616872;
											border-radius: 4px;
										}

										.pagination li a:hover {
											background-color: #d4dada;
										}

										.pagination .next a,
										.pagination .prev a {
											text-transform: uppercase;
											font-size: 12px;
										}

										.pagination .currentpage a {
											background-color: #518acb;
											color: #fff;
										}

										.pagination .currentpage a:hover {
											background-color: #518acb;
										}
									</style>

									<?php
									$perpage = 20;
									if (isset($_GET['page2'])) {
										$page = $_GET['page2'];
									} else {
										$page = 1;
									}

									if (empty($_GET['page2'])) {
										$page = 1;
									}
									$start = ($page - 1) * $perpage;



									$addcode = "";
									if (empty($_GET["searchname"])) {
									} else {
										$addcode = " and  name like '%" . $searchname . "%' ";
									}

									$sql2 = " SELECT * FROM work_time where student_paper != '' 
											and student_paper = '" . $_GET["CusID"] . "'   
											" . $addcode . $addcode2 . "  order by pk asc    ";
									$query2 = mysqli_query($objCon, $sql2);
									$total_record = mysqli_num_rows($query2);
									$total_page = ceil($total_record / $perpage);
									?>
									<?php if (ceil($total_record / $perpage) > 0) : ?>
										<ul class="pagination">
											<?php if ($page > 1) : ?>
												<li class="prev"><a href="work_time.php?page2=<?php echo $page - 1 ?>&CusID=<?php echo $_GET["CusID"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>">Prev</a></li>
											<?php endif; ?>

											<?php if ($page > 3) : ?>
												<li class="start"><a href="work_time.php?page2=1&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>">1</a></li>
												<li class="dots">...</li>
											<?php endif; ?>

											<?php if ($page - 2 > 0) : ?><li class="page"><a href="work_time.php?page2=<?php echo $page - 2 ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
											<?php if ($page - 1 > 0) : ?><li class="page"><a href="work_time.php?page2=<?php echo $page - 1 ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

											<li class="currentpage"><a href="work_time.php?page2=<?php echo $page ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>"><?php echo $page ?></a></li>

											<?php if ($page + 1 < ceil($total_record / $perpage) + 1) : ?><li class="page"><a href="work_time.php?page2=<?php echo $page + 1 ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
											<?php if ($page + 2 < ceil($total_record / $perpage) + 1) : ?><li class="page"><a href="work_time.php?page2=<?php echo $page + 2 ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

											<?php if ($page < ceil($total_record / $perpage) - 2) : ?>
												<li class="dots">...</li>
												<li class="end"><a href="work_time.php?page2=<?php echo ceil($total_record / $perpage) ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
											<?php endif; ?>

											<?php if ($page < ceil($total_record / $perpage)) : ?>
												<li class="next"><a href="work_time.php?page2=<?php echo $page + 1 ?>&tablload1=<?php echo $_GET["tablload1"]; ?>&searchcustomer=<?php echo $_GET["searchcustomer"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname=<?php echo $_GET["searchname"]; ?>&CusID=<?php echo $_GET["CusID"]; ?>">Next</a></li>
											<?php endif; ?>
										</ul>
									<?php endif; ?>

								</div>


								<div class="col-lg-12" align="left" style="margin-top: 15px; ">
									<div class="table-responsive">
										<table id="key_product" class=" table    tablemobile  " border="0">
											<thead>
												<tr>
													<th width="3%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> วัน เดือน ปี </font>
														</div>
													</th>
													<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> รหัสวิชา </font>
														</div>
													</th>
													<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> โครงการ </font>
														</div>
													</th>
													<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> กลุ่มที่ </font>
														</div>
													</th>
													<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> อาจารย์ประจำวิชา </font>
														</div>
													</th>
													<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> ข้อมูลการทำงาน </font>
														</div>
													</th>
													<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; ">
														<div align="center">
															<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; "> ลบ-แก้ไข </font>
														</div>
													</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$i = 1;
												$total = 0;


												if (empty($_GET['page2'])) {
													$i = 1;
												} else if (($_GET['page2'] == 1)) {
													$i = 1;
												} else {

													$i = (($_GET["page2"] - 1) * 20) + 1;
												}

												$sql2 = " SELECT * FROM work_time where student_paper != '' 
											and student_paper = '" . $_GET["CusID"] . "'   
											" . $addcode . $addcode2 . "  
											order by pk asc  limit {$start} , {$perpage}   ";

												$query2 = mysqli_query($con, $sql2);
												$bg = "#FFF";
												while ($objResult2 = mysqli_fetch_array($query2)) {
													$seco = $objResult2['section'];
													if ($bg == "#FFF") {
														$bg = "#F8FAFD";
													} else {
														$bg = "#FFF";
													}



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



													$name_teacher = " - ";
													$sql = "SELECT * FROM member where status = 'AJ' and pk = '" . $data11 . "'  order by pk asc  ";
													$query = mysqli_query($objCon, $sql);
													while ($objResult = mysqli_fetch_array($query)) {
														$name_teacher = $objResult["name"];
													}
												?>
													<tr style="background-color: <?php echo $bg; ?>; ">

														<td height="25px" style=" border-left: 0px solid #F2F2F2; ">
															<div align="center">
																<font size="3px" color="Black" style=" font-size: 13px; "> <?php
																															echo DateThai($objResult2["newdate"]) . " " . DateThai2($objResult2["newdate"]); ?> </font>
															</div>
														</td>

														<td style=" border-left: 0px solid #F2F2F2; ">
															<div align="center">
																<font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $data1 . " " . $data2; ?> </font>
															</div>
														</td>
														<td style=" border-left: 0px solid #F2F2F2; ">
															<div align="center">
																<font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["savedata4"]; ?> </font>
															</div>
														</td>
														<td style=" border-left: 0px solid #F2F2F2; ">
															<div align="center">
																<font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $seco; ?> </font>
															</div>
														</td>


														<td style=" border-left: 0px solid #F2F2F2; ">
															<div align="center">
																<font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $name_teacher; ?> </font>
															</div>
														</td>


														<td style=" border-left: 0px solid #F2F2F2; ">
															<div align="center">
																<font size="3px" color="Black" style=" font-size: 13px; ">
																	<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" style="cursor: pointer; "> ดูรายละเอียด </a>
																</font>
															</div>
														</td>


														<!-- modal small -->
														<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
															<div class="modal-dialog modal-md" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<font size="3px" color="black">

																			วันเดือนปี : <?php echo DateThai($objResult2["savedata1"]) . " " . DateThai2($objResult2["savedata1"]); ?> <br>

																			ลงเวลาปฎิบัติงาน เริ่มต้น : <?php echo $objResult2["savedata2"]; ?> น.<br>

																			ลงเวลาปฎิบัติงาน สิ้นสุด : <?php echo $objResult2["savedata3"]; ?> น.<br>

																			โครงการ (ปกติ/พิเศษ) : <?php echo $objResult2["savedata4"]; ?> <br>

																			จำนวนขั่วโมงปฎิบัติงาน <br>
																			กลุ่มที่ (section): <?php echo $objResult2["section"]; ?> <br>

																			บรรยาย : <?php echo $objResult2["savedata5"]; ?> ชั่วโมง<br>

																			ปฎิบัติงาน : <?php echo $objResult2["savedata6"]; ?> ชั่วโมง<br>

																			งานที่ปฎิบัติ : <?php echo $objResult2["savedata7"]; ?> <br>

																		</font>
																	</div>
																</div>
															</div>
														</div>
														<!-- end modal small -->


														<td align="center">
															<div align="center">

																<a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"]; ?>?Action=Del2&CusID=<?php echo $_GET["CusID"]; ?>&Idel=<?php echo $objResult2["pk"]; ?>';}">
																	<button type="button" class="btn btn-sm btn-primary" style="background-color: #FD938F; border-radius: 5px;   border: 1px solid  #FD938F;   ">
																		<font color="#000000" size="2px" class="serif1"> ลบ </font>
																	</button>
																</a>

																<a href="work_time_edit.php?CusID=<?php echo $_GET["CusID"]; ?>&Idel=<?php echo $objResult2["pk"]; ?>&page=2">
																	<button type="button" class="btn btn-sm btn-primary" style="background-color: #FFD45F; border-radius: 5px;   border: 1px solid  #FFD45F;   ">
																		<font color="#000000" size="2px" class="serif1"> เเก้ไข </font>
																	</button>
																</a>


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
								</div>





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