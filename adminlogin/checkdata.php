<?php
session_start();
$_SESSION["load"] = "5";
include('header.php');

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

?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- page content -->
<div class="right_col" role="main" style="background-color: #F5FBFD; ">

	<div class="page-title">
		<div class=" ">
			<div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left">
				<font color="#000000" size="4px" class="serif2">
					<div style="margin-top: 10px;">
						<b> ตรวจสอบสถานะการสมัคร &nbsp; ( <?php echo (empty($_SESSION["subject"]) ? 'ทุกระดับการศึกษา' : 'เฉพาะ' . $_SESSION["subject"]) ?> ) </b>
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
					<Br>
					<!--- Action =  ไปยังไฟล์ที่ทำการเช็ค  --->
					<form role="form" name="frmMain" method="get" action="checkdata.php" enctype="multipart/form-data">
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
											$sql = "SELECT * FROM classdata where  pk = '" . $searchname4 . "'  order by pk asc  ";
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
										<font color="black" size="3px" class="serif"> รหัสนักศึกษา </font>
										<input type="text" name="searchname" id="searchname" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off" style=" border-radius: 10px; "> <br>
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

										<a href="checkdata.php">
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
									<th width="5%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black" color="black"> ลำดับ </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> รหัสนักศึกษา </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> ชื่อ-นามสกุล </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> วิชาที่สมัคร </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> ภาคการศึกษา </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> วันที่สมัคร </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> ขัอมูลที่สมัคร </font>
										</div>
									</th>
									<th width="10%" bgcolor="#A8DADC">
										<div align="center">
											<font size="2px" color="black"> สถานะ </font>
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
									$addcode = "and b.subject = '" . $_GET["data8"] . "'";
								}
								if (empty($_GET["searchname"])) {
									$addcode2 = '';
								} else {
									$addcode2 = "and b.codestudent like '%" . $_GET["searchname"] . "%' ";
								}
								if (empty($_GET["data10"])) {
									$addcode3 = '';
								} else {
									$addcode3 = "and a.subject = '" . $_GET["data10"] . "' ";
								}

								if (empty($_SESSION["subject"])) {
									$subject = '';
								} else {
									$subject = "and b.subject = '$_SESSION[subject]'";
								}

								$sql = "SELECT *, a.pk, a.subject, a.status FROM student_paper a 
							Inner Join member b
							On a.student = b.pk
							where b.codestudent like '%" . (!$searchname ? '' : $searchname) . "%'   " . $addcode . $addcode2 . $addcode3 . "
							$subject
							order by a.pk desc ";

								// and b.subject = '$_SESSION[subject]'
								$query = mysqli_query($con, $sql);
								while ($objResult = mysqli_fetch_array($query)) {
									/// โหลดข้อมูลชื่อ อาจารย์ 
									$namedatacodestudent = "";
									$namedata  = "";
									$sql4 = "SELECT * FROM member  where pk = '" . $objResult["student"] . "' ";
									$query4 = mysqli_query($objCon, $sql4);
									while ($objResult4 = mysqli_fetch_array($query4)) {
										$namedata = $objResult4["name"];
										$namedatacodestudent = $objResult4["codestudent"];
									}
									$namedatasubject  = "";
									$sql4 = "SELECT * FROM classdata  where pk = '" . $objResult["subject"] . "' ";
									$query4 = mysqli_query($objCon, $sql4);
									while ($objResult4 = mysqli_fetch_array($query4)) {
										$namedatasubject = $objResult4["data2"];

										$namedatasubject2  = "";
										$sql42 = "SELECT * FROM drop_term  where name = '" . $objResult4["data8"] . "' ";
										$query42 = mysqli_query($objCon, $sql42);
										while ($objResult42 = mysqli_fetch_array($query42)) {
											$namedatasubject2 = $objResult42["name"];
										}
									}
								?>
									<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $i; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedatacodestudent; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedata; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedatasubject; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo $namedatasubject2; ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black"> <?php echo DateThai($objResult["create_date"]) . " " . DateThai2($objResult["create_date"]); ?></font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black">



													<a class="btn  btn-sm btn-warning" href="checkdata2.php?subject=<?php echo $objResult["subject"]; ?>&CusID=<?php echo $objResult["pk"]; ?>&page=">
														<font size="2px"> จัดการข้อมูล </font>
													</a>

												</font>
											</div>
										</td>
										<td>
											<div align="center">
												<font size="2px" color="Black">
													<?php

													if ($objResult["status"] == "0") {
														echo " <font color = '#FF8C00' > กำลังตรวจสอบ </fonnt> ";
													} else if ($objResult["status"] == "1") {
														echo " <font color = '#006400' > อนุมัติ </fonnt> ";
													} else if ($objResult["status"] == "2") {
														echo " <font color = 'red' > ไม่อนุมัติ </fonnt> ";
													}
													?>
												</font>
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
				<?php } ?>


			</div>
		</div>
	</div>
</div>




<?php
include('footer.php');
?>