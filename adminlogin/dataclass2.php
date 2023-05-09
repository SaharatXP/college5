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


$major = !isset($_GET["major"]) ? "all" : $_GET["major"];



// $searchname = "";
// if (empty($_GET["searchname"])) {
// } else {
// 	$searchname = $_GET["searchname"];
// }


if (isset($_GET["Action"])) {
	if ($_GET["Action"] == "Del") {
		$strSQL = "Delete From teacher_copy  ";
		$objQuery = mysqli_query($objCon, $strSQL);

		//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
		echo ("<script>window.location = 'dataclass2.php';</script>");
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
				<script>
					function archiveFunction() {
						event.preventDefault(); // prevent form submit
						var form = event.target.form; // storing the form
						// var form = $(this).parents('form');
						swal.fire({
								title: "อัพโหลดไฟล์",
								text: "คุณต้องการอัพโหลดไฟล์ใช่หรือไม่ ?",
								showCancelButton: true,
								confirmButtonColor: "#3085d6",
								confirmButtonText: "ต้องการ",
								cancelButtonText: "ยกเลิก",

							},
							function(isConfirmed) {
								if (isConfirmed) {
									form.submit(); // submitting the form when user press yes
								} else {
									// swal("Cancelled", "Your imaginary file is safe :)", "error");
									swal.close()
								}
							});

					}
				</script>

				<?php if (empty($_GET["page"])) { ?>

					<!--   -->
					<form role="form" name="frmMain" method="post" action="saveupload.php" enctype="multipart/form-data" onsubmit="return confirm('ยืนยันการอัพโหลดไฟล์ ?');">
						<div class="row">
							<div class="col-lg-12 ">

								<div class="col-lg-12 ">
									<div class="form-group">
										<div class="row">
											<div class="col-lg-4 "><br>
												<div class="form-group">
													<font color="black" size="3px" class="serif"> อัพไฟล์ Execel *** กรุณาแปลงเป็น CSV </font>
													<input type="file" name="filUpload" id="filUpload" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off" style=" border-radius: 10px; "> <br>
												</div>
											</div>
											<div class="col-lg-6 "><br>
												<div class="form-group">
													<font color="black" size="3px" class="serif"> &nbsp;&nbsp; <br> </font>
													<button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 10px; width: 130px; border-color: white;">
														<!-- onclick="archiveFunction()" -->
														<font color="white" size="3px" class="serif"> อัพโหลดไฟล์ </font>
													</button>



													<a href="dataclass.php">
														<button type="button" class="btn btn-primary" style="background-color: #0000ff; border-radius: 10px; width: 180px; border-color: white; ">
															<font color="white" size="3px" class="serif"> รายวิชาที่เปิดรับสมัคร </font>
														</button>
													</a>

												</div>
											</div>
										</div>

									</div>
								</div>
								<br>



							</div>
						</div>
					</form>

					<div class="col-lg-12">

						<hr style=" border: 1px solid #003566; ">
						<br>
					</div>

					<div class="col-lg-12">
						<form role="form" name="frmMain" method="get" action="dataclass2.php" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-4 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> ค้นหารายวิชาจากฐานข้อมูล </font>
										<input type="text" name="searchname" id="searchname" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off" style=" border-radius: 10px; "> <br>
									</div>
								</div>
								<div class="col-lg-6 ">
									<div class="form-group">
										<font color="black" size="3px" class="serif"> &nbsp;&nbsp; <br> </font>
										<button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 10px; width: 80px; border-color: white; ">
											<font color="white" size="3px" class="serif"> ค้นหา </font>
										</button>

										<a href="dataclass2.php?searchname=all">
											<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 10px; width: 180px; border-color: white; ">
												<font color="white" size="3px" class="serif"> แสดงวิชาทั้งหมด </font>
											</button>
										</a>

										<a class="btn btn-sm btn-danger" href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"]; ?>?Action=Del';}" style="background-color: #FF0000; border-radius: 10px; width: 110px; border-color: white; ">
											<font color="white" size="3px" class="serif"> ล้างข้อมูล </font>
										</a>

									</div>
								</div>
							</div>
						</form>
					</div>

					<div class="col-lg-12">
						<font size="2px" color="black" color="black"> ตารางแสดงข้อมูลที่ค้นหาจากฐานข้อมูล </font>
					</div>



					<div class="col-md-12" style="margin-top: 10px;">
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


						if (empty($_GET["searchname"])) {
							$searchname = "#";
						} else {
							$searchname = $_GET["searchname"];
						}

						$sql2 = "SELECT * FROM teacher_copy where (data2 like '%" . $searchname . "%'   or data1   like '%" . $searchname . "%')   order by pk desc     ";


						if (($_GET["searchname"] == "all")) {

							$sql2 = "SELECT * FROM teacher_copy     order by pk desc   ";
						}



						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						?>


						<?php if (ceil($total_record / $perpage) > 0) : ?>
							<ul class="pagination">
								<?php if ($page > 1) : ?>
									<li class="prev"><a href="dataclass2.php?page2=<?php echo $page - 1 ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3) : ?>
									<li class="start"><a href="dataclass2.php?page2=1&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>">1</a></li>
									<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page - 2 > 0) : ?><li class="page"><a href="dataclass2.php?page2=<?php echo $page - 2 ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
								<?php if ($page - 1 > 0) : ?><li class="page"><a href="dataclass2.php?page2=<?php echo $page - 1 ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="dataclass2.php?page2=<?php echo $page ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>"><?php echo $page ?></a></li>

								<?php if ($page + 1 < ceil($total_record / $perpage) + 1) : ?><li class="page"><a href="dataclass2.php?page2=<?php echo $page + 1 ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
								<?php if ($page + 2 < ceil($total_record / $perpage) + 1) : ?><li class="page"><a href="dataclass2.php?page2=<?php echo $page + 2 ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage) - 2) : ?>
									<li class="dots">...</li>
									<li class="end"><a href="dataclass2.php?page2=<?php echo ceil($total_record / $perpage) ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)) : ?>
									<li class="next"><a href="dataclass2.php?page2=<?php echo $page + 1 ?>&major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&search_start=<?php echo $search_start; ?>&come_in=<?php echo $come_in; ?>&come_down=<?php echo $come_down; ?>">Next</a></li>
								<?php endif; ?>
							</ul>
						<?php endif; ?>

					</div>

					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="5%" bgcolor="#A8DADC">
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
												<font size="2px" color="black"> ชื่อภาษาอังกฤษ </font>
											</div>
										</th>
										<th width="5%" bgcolor="#A8DADC">
											<div align="center">
												<font size="2px" color="black"> หน่วยกิตต่ำสุด </font>
											</div>
										</th>
										<th width="5%" bgcolor="#A8DADC">
											<div align="center">
												<font size="2px" color="black"> หน่วยกิตมากสุด </font>
											</div>
										</th>
										<th width="5%" bgcolor="#A8DADC">
											<div align="center">
												<font size="2px" color="black"> เปิดรับสมัครผู้ช่วยอาจารย์ </font>
											</div>
										</th>
									</tr>
								</thead>

								<tbody>
									<?php
									$i = 1;
									$img = "";
									$img_all = "";

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



									if (empty($_GET['page2'])) {
										$i = 1;
									} else if (($_GET['page2'] == 1)) {
										$i = 1;
									} else {

										$i = (($_GET["page2"] - 1) * 20) + 1;
									}

									/// โหลดข้อมูลที่ได้ทำการเพิ่มไปล่าสุดมาแสดง

									if (empty($_GET["searchname"])) {
										$searchname = "#";
									} else {
										$searchname = $_GET["searchname"];
									}

									$sql = "SELECT * FROM teacher_copy where (data2 like '%" . $searchname . "%'   or data1   like '%" . $searchname . "%')   order by pk desc limit {$start} , {$perpage}    ";


									if (($_GET["searchname"] == "all")) {

										$sql = "SELECT * FROM teacher_copy     order by pk desc limit {$start} , {$perpage}    ";
									}


									$query = mysqli_query($con, $sql);
									while ($objResult = mysqli_fetch_array($query)) {
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
													<font size="2px" color="Black"> <?php echo $objResult["data3"]; ?></font>
												</div>
											</td>
											<td>
												<div align="center">
													<font size="2px" color="Black"> <?php echo $objResult["data4"]; ?></font>
												</div>
											</td>
											<td>
												<div align="center">
													<font size="2px" color="Black"> <?php echo $objResult["data5"]; ?></font>
												</div>
											</td>



											<td>
												<div align="center">
													<font size="2px" color="Black">
														<a class="btn btn-sm btn-primary" href="datacass3.php?CusID=<?php echo $objResult["pk"]; ?>&page=">
															<font size="2px"> เลือกวิชานี้ </font>
														</a>
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
					</div>




					<div class="col-lg-12" style="margin-top: 30px; display: none; ">
						<font size="2px" color="black" color="black"> ตารางแสดงข้อมูลรายวิชาที่เปิดรับสมัคร </font>
					</div>


					<div class="col-lg-12" style="display: none;">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="5%" bgcolor="#A8DADC">
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
												<font size="2px" color="black"> กลุ่ม </font>
											</div>
										</th>
										<th width="10%" bgcolor="#A8DADC">
											<div align="center">
												<font size="2px" color="black"> หน่วยกิต </font>
											</div>
										</th>
										<th width="10%" bgcolor="#A8DADC">
											<div align="center">
												<font size="2px" color="black"> เทอม </font>
											</div>
										</th>
										<th width="10%" bgcolor="#A8DADC">
											<div align="center">
												<font size="2px" color="black"> เกรดขั้นต่ำในการรับสมัคร </font>
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

							</table>
						</div>
					</div>

					<div class="col-lg-12">
						<br> <br> <br>
						<br> <br> <br>
						<br> <br> <br>
						<br> <br> <br>
					</div>

				<?php } ?>








				<?php
				if (isset($_GET["page"])) {
					if ($_GET["page"] == "1") {
						$sql = "SELECT * FROM classdata Where  pk = '" . $_GET["CusID"] . "' ";
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
																<input type="radio" name="chk1" id="chk1" value="ปริญญาตรี" <?php if ($chk1 == "ปริญญาตรี") {
																																echo "checked";
																															} ?>>
																<span class="checkmark"></span>
															</label>
														</div>
														<div class="col-md-6 " style="margin-top: 5px; ">
															<label class="container2">
																<font color="black" size="3px" class="serif"> ปริญญโท </font>
																<input type="radio" name="chk2" id="chk2" value="ปริญญโท" <?php if ($chk2 == "ปริญญโท") {
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

											<div class="col-lg-3 ">
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

												</div>
											</div>


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

															<font color="black" size="3px" class="serif"> &nbsp; บัณฑิตศึกษา </font>

														</td>
														<td>

															<input type="text" name="data16" id="data16" class="form-control " value="<?php echo $data16; ?>" autocomplete="off" style=" border-radius: 0px; ">

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