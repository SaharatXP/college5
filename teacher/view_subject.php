<?php
session_start();
$_SESSION["load"] = "2";
include('header.php'); 


	
		$searchname = "";
		 
		if(empty($_GET["CusID"])){
			
		}else{
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
						.container2:hover input ~ .checkmark {
						  background-color: #ccc;
						}

						/* When the checkbox is checked, add a blue background */
						.container2 input:checked ~ .checkmark {
						  background-color: #FF0000;
						}

						/* Create the checkmark/indicator (hidden when not checked) */
						.checkmark:after {
						  content: "";
						  position: absolute;
						  display: none;
						}

						/* Show the checkmark when checked */
						.container2 input:checked ~ .checkmark:after {
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

      <div class="section-title">
        สมัครรายวิชาสําหรับนักศึกษาระดับปริญญาโท-เอก 
      </div>
       
        <?php 
			$i = 1;  
					$sql = "SELECT * FROM classdata Where  pk = '". $searchname ."' ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{ 
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
			$sql = "SELECT * FROM classdata where pk = '".$_GET["CusID"]."'  order by pk desc ";  
			$query = mysqli_query($con,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{      

			/// โหลดข้อมูลชื่อ อาจารย์ 
			$namedata5 = "";
			$sql4 = "SELECT * FROM member  where pk = '".$objResult["data5"]."' "; 
			$query4 = mysqli_query($objCon,$sql4);
			while($objResult4 = mysqli_fetch_array($query4))
			{  
				$namedata5 = $objResult4["name"];
			} 

			?>
			<div class="row" align="left" >
			<div class="col-lg-12" align="left"> 
      		  <div class="announce-item">  
			  <font size="3px"> สมัครรายวิชาสําหรับนักศึกษาระดับปริญญาโท-เอก 
			  
					 <div class="row">
					

                    <form role="form" name="frmMain" method="post" action="send_admin.php" enctype="multipart/form-data" >  
					<input type="hidden" name="subject" id="subject" class="form-control " value="<?php echo $_GET["CusID"]; ?>" autocomplete="off"  style=" border-radius: 5px; margin-top: 10px; " readonly    > 
                    
						<div class="col-lg-12 ">
					<div class="form-group"> 
					 
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รหัสวิชา-วิชา  </font> 
					<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1." - ".$data2; ?>" autocomplete="off"  style=" border-radius: 5px; margin-top: 10px; " readonly    > 
					</div>
					</div> 
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> หน่วยกิต  </font> 
					<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data5; ?>" autocomplete="off"  style=" border-radius: 5px; margin-top: 10px; " readonly   > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อาจารย์ประจําวิชา  </font> 
					<?php 
						$nameteacher = "";
						$sql = "SELECT * FROM member where status = 'AJ' and pk = '".$data11."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						  $nameteacher = $objResult["name"];
						}
					?>   
					<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $nameteacher; ?>" autocomplete="off"  style=" border-radius: 5px; margin-top: 10px; " readonly   > 
					</div>
					</div>
					
					<div class="col-lg-5 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอนที่เปิดรับสมัคร  </font>   
					   <table width="100%" border="1">
					 	<tr>
					 		<td width="35%" align="center" >
							<font color="black" size="3px" class="serif"> กลุ่มปฎิบัติงาน  </font>   </td>
									<td width="35%" align="center"   > 
							<font color="black" size="3px" class="serif"> ระดับ  </font>  </td>
									<td width="35%"  align="center" > 
							<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอน  </font>  </td>
					 	</tr>
					 	<tr>
					 	<td  rowspan="2" valign="middle" align="center" >
							 
						 <font color="black" size="3px" class="serif"> &nbsp; <?php echo $data14; ?> 	 </font> 
				 		
				 		</td>
					 	<td> 
								
						<font color="black" size="3px" class="serif"> &nbsp;  ปริญญาตรี  </font>  
				 		
				 		
				 		</td>
					 	<td align="center" > 
						 <font color="black" size="3px" class="serif"> &nbsp; <?php echo $data15; ?> 	 </font>  
				 	
				 		</td>
					 	</tr>
					 	<tr>
					 	<td  >
							 
						<font color="black" size="3px" class="serif"> &nbsp; บัณฑิตศึกษา  </font> 
				 		
				 		</td> 
					 	<td  align="center" > 
						 <font color="black" size="3px" class="serif"> &nbsp; <?php echo $data16; ?> 	 </font>  
				 	
				 		</td>
					 	</tr>
					 </table>			
					</div>
					</div> 
					
					<div class="col-lg-12 ">
					</div> 
				  
				  <div class="col-lg-12 "> 
					 	<table width="100%" border="0">
					 		<tr>
					 			<td>  
					 			<div>   
								<font size="3px" color="black"  > มีความประสงค์เบิกค่าตอบแทนผู้ช่วยสอนแล้วผู้ช่วยปฎิบัติงาน  </font>  </label>
								<br>
								<?php 
									$sql = "SELECT * FROM drop_other where  name = '".$data10."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										$object = $objResult["name"];
									}
								?>   
								<font size="3px" color="red" ><?php echo $object; ?> </font> 
								</div> 
					 			</td>
					 			 
					 			<td>  
					 			</td>
					 		</tr>
					 		</table> 
					</div>
				  
				  
					  
					<div class="col-lg-6 " style="display: none; ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> มีความประสงค์เบิกค่าตอบแทนผู้ช่วยสอนและผู้ช่วยปฏิบัติงาน  </font> 
				 	
					 	<div class="row" style="margin-top: 15px;"> 
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" > เบิกเฉพาะบรรยาย (Lec.) </font>
						<input type="checkbox" name="chk1" id="chk1" value = "checked"    <?php echo $checkon1; ?> >
						<span class="checkmark"></span>
						</label>
						</div> 
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" > เบิกเฉพาะปฏิบัติการ (Lab.)  </font>
						<input type="checkbox" name="chk2" id="chk2" value = "checked"     <?php echo $checkon2; ?> >
						<span class="checkmark"></span>
						</label>
						</div> 
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" > เบิก บรรยาย + ปฏิบัติการ (Lec. + Lab.) </font>
						<input type="checkbox" name="chk3" id="chk3" value = "checked"     <?php echo $checkon3; ?> >
						<span class="checkmark"></span>
						</label>
						</div> 
						</div> 
						 
					</div>
					</div> 
					
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ภาระงานผู้ช่วยสอน   | <a class="btn btn-danger" data-toggle="modal" data-target="#myEodal1" data-id="" >
					<font color="White" size="2px" class="serif2"> ! หมายเหตุ : อัพตราค่าจ้าง </font> </a>    </font> 
				 	
				 	
				 		<!-- Modal -->
									<div class="modal fade" id="myEodal1<?php echo $objResult["bill_no"]; ?>" role="dialog">
									<div class="modal-dialog modal-md "> 
									<!-- Modal content-->
										<div class="modal-content">
												<div class="modal-header">
												<font size="2px" color="black"  class="serif2"> หมายเหตุ : อัพตราค่าจ้าง  </font> 
												<button type="button" id="closepop"  class="close" data-dismiss="modal">&times;</button>
												</div> <br>
												<center>  

										<div class="row">  
										<div class="col-lg-12" > 
											<div align="center">
												<font size="4px"> <b>  ! หมายเหตุ : อัพตราค่าจ้าง  </b>   </font>
											</div>
										</div>   
										<div class="col-lg-12" style="margin-left: 10px; margin-right: 10px; margin-top: 15px; ">  
											<div align="left" style="margin-left: 10px; margin-right: 10px; margin-top: 15px; " >
												1. นักศึกษาผู้ช่วยสอนและผู้ช่วยปฎิบัติงาน อยู่ระดับปริญญาโท เอก (ภาคปกติ) เหมาจ่ายไม่เกินเดือนละ 3,000 บาท/คน/เดือน 
												<br>
												2. นักศึกษาผู้ช่วยสอนและผู้ช่วยปฎิบัติงาน อยู่ระดับปริญญาโท เอก (โครงการพิเศษ) เหมาจ่ายไม่เกินเดือนละ 4,000 บาท/คน/เดือน
												<br>
												3. นักศึกษาสามารถเป็น TA ได้ไม่เกิน 3 วิชา 
												<br>
											</div> 
										</div>   
										</div>   <br>

										 
									<br> 
									</center>
									</div>
									</div>
									</div> 
									
									
					 	  <div class="row" style="margin-top: 15px;"> 
					 	 <style>
						  input.larger {
							width: 17px;
							height: 17px; vertical-align:middle; margin-top: -3px;  
						  }
						</style>
						 <div class="col-lg-5">  
					 	 <table width="100%" border="0">
					 		<tr>
					 			<td colspan="3">  
					 			<div>   
								<font size="3px" color="black"  >  ชั่วโมงบรรยาย </font>  </label> 
								</div> 
					 			</td> 
					 			<td>  
					 			</td>
					 		</tr>
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								  <label class="container2" style="margin-top: 10px;" > 
								  <font color="black"  size="3px" class="serif" >   ช่วยตรวจงาน    </font>
								  <input type="checkbox" disabled name="chk3" id="chk3" value="ช่วยตรวจงาน" 
								  <?php if($chk3 == "ช่วยตรวจงาน"){ echo "checked"; } ?>   >
								  <span class="checkmark"></span>
								  </label>
								    
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<input type="text" name="datachk3" id="datachk3"  placeholder="   " value="<?php echo $datachk3; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; " readonly     > 
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<font size="3px" color="black" > &nbsp; ชั่วโมง/ต่อสัปดาห์ </font> 
								</div> 
					 			</td> 
					 		</tr> 
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								<font size="3px" color="black" > &nbsp; กิจกรรมที่ปฎิบัติ </font>  
								    
								</div> 
					 			</td>
					 			<td colspan="1"  >  
					 			<div>   
								<textarea type="text" name="datachk31" id="datachk31"  placeholder="   " value="<?php echo $datachk31; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; " readonly     ><?php echo $datachk31; ?></textarea> 
								</div> 
					 			</td>  
					 		</tr> 
					 		
					 		
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								  <label class="container2" style="margin-top: 10px;" > 
								  <font color="black"  size="3px" class="serif" >   เช็คชื่อ/ใบงาน    </font>
								  <input type="checkbox" disabled name="chk4" id="chk4" value="เช็คชื่อ/ใบงาน" 
								  <?php if($chk4 == "เช็คชื่อ/ใบงาน"){ echo "checked"; } ?>   >
								  <span class="checkmark"></span>
								  </label>
								    
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<input type="text" name="datachk4" id="datachk4"  placeholder="   " value="<?php echo $datachk4; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; "   readonly   > 
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<font size="3px" color="black" > &nbsp; ชั่วโมง/ต่อสัปดาห์ </font> 
								</div> 
					 			</td> 
					 		</tr> 
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								<font size="3px" color="black" > &nbsp; กิจกรรมที่ปฎิบัติ </font>  
								    
								</div> 
					 			</td>
					 			<td colspan="1"  >  
					 			<div>    
								<textarea type="text" name="datachk41" id="datachk41"  placeholder="   " value="<?php echo $datachk41; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; " readonly     ><?php echo $datachk41; ?></textarea> 
								</div> 
					 			</td>  
					 		</tr> 
					 		
					 		
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								  <label class="container2" style="margin-top: 10px;" > 
								  <font color="black"  size="3px" class="serif" >   อื่นๆระบุ     </font>
								  <input type="checkbox" disabled name="chk5" id="chk5" value="อื่นๆระบุ " 
								  <?php if($chk5 == "อื่นๆระบุ "){ echo "checked"; } ?>   >
								  <span class="checkmark"></span>
								  </label>
								    
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<input type="text" name="datachk5" id="datachk5"  placeholder="   " value="<?php echo $datachk5; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; "   readonly   > 
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<font size="3px" color="black" > &nbsp; ชั่วโมง/ต่อสัปดาห์ </font> 
								</div> 
					 			</td> 
					 		</tr> 
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								<font size="3px" color="black" > &nbsp; กิจกรรมที่ปฎิบัติ </font>  
								    
								</div> 
					 			</td>
					 			<td colspan="1"  >  
					 			<div>    
								<textarea type="text" name="datachk51" id="datachk51"  placeholder="   " value="<?php echo $datachk51; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; " readonly     ><?php echo $datachk51; ?></textarea> 
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
								<font size="3px" color="black"  >  ชั่วโมงปฎิบัติการ </font>  </label> 
								</div> 
					 			</td> 
					 			<td>  
					 			</td>
					 		</tr>
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								  <label class="container2" style="margin-top: 10px;" > 
								  <font color="black"  size="3px" class="serif" >   จำนวนชั่วโมง    </font>
								  <input type="checkbox" disabled name="chk6" id="chk6" value="จำนวนชั่วโมง" 
								  <?php if($chk6 == "จำนวนชั่วโมง"){ echo "checked"; } ?>   >
								  <span class="checkmark"></span>
								  </label>
								    
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<input type="text" name="datachk6" id="datachk6"  placeholder="   " value="<?php echo $datachk6; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; "  readonly    > 
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<font size="3px" color="black" > &nbsp; ชั่วโมง/ต่อสัปดาห์ </font> 
								</div> 
					 			</td> 
					 		</tr>
					 		<tr>
					 			<td >  
					 			<div>  
					 			
								<font size="3px" color="black" > &nbsp; กิจกรรมที่ปฎิบัติ </font>  
								    
								</div> 
					 			</td>
					 			<td colspan="1"  >  
					 			<div>    
								<textarea type="text" name="datachk61" id="datachk61"  placeholder="   " value="<?php echo $datachk61; ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; " readonly     ><?php echo $datachk61; ?></textarea> 
								</div> 
					 			</td>  
					 		</tr>   
					 	</table> 
						</div>  
						
						
						
						
						     
						</div>
						 
					</div>
					</div> 
					
					 <div class="col-lg-7" style="margin-top: 10px; margin-bottom: 10px; ">  
					 	 <table width="100%" border="0"> 
					 		<tr>
					 			<td width="40%" >  
					 			<div>   
								<font size="3px" color="black" > &nbsp; รวมชั่วโมงการทํางานของผู้ช่วยสอน </font> 
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<input type="text" name="datachk3" id="datachk3"  placeholder="   " value="<?php echo number_format(0+$datachk3+$datachk4+$datachk5+$datachk6); ?>" class="form-control " autocomplete="off"  style=" border-radius: 5px; " readonly      > 
								</div> 
					 			</td>
					 			<td>  
					 			<div>   
								<font size="3px" color="black" > &nbsp;&nbsp; ชั่วโมง/ต่อสัปดาห์ </font> 
								</div> 
					 			</td> 
					 		</tr> 
					 		<tr> 
					 			<td colspan="3"  >  
					 			<div>   
								<font size="3px" color="black" > &nbsp;  (ภาระงานของผู้ช่วยสอนรวมไม่น้อยกว่า 10 ชั่วโมง แต่ไม่เกิน 12 ชั่วโมง/สัปดาห์) </font> 
								</div> 
					 			</td> 
					 		</tr> 
					 		 
					 	</table> 
						</div> 
					
					<div class="col-lg-12 " align="right">
					<div class="form-group">   
        	
        	
        	
						 <button type="button" class="btn btn-primary btn-minwidth" style="width: 130px;  margin-top: 10px; "   data-toggle="modal" data-target="#smallmodal" > <font color="white" size="3px" class="serif">   ส่งใบสมัคร </font>  </button>  
        				
        				  <!-- modal small -->
									<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
									<div class="modal-dialog modal-sm" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> ยืนยันทำรายกาารส่งใบสมัคร </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										 
										 <div class="row" align="center">
										 <div class="col-lg-12" align="center">
										 
											<button type="submit" class="btn btn-primary" style=" border-radius: 5px; width: 130px; border-color: white; margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ยืนยันส่งใบสมัคร   </b> </font> </button> 
									 		 
									 
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #FFFFFF; border-radius: 5px; width: 130px; border-color: white; border: 1px solid #FF0000;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" > <b>   ยกเลิก   </b> </font> </button> 
										</div> 
										</div> 
											   
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small --> 
        				
					</div>
					</div> 
					  
					  
					</div>
					 
				   
					  
					  
					</div>
					</div> 
					 
					</form> 
					
					
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
