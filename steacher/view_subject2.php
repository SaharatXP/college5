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
        สมัครรายวิชาสําหรับนักศึกษาระดับปริญญาตรี 
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
			  <font size="3px"> สมัครรายวิชาสําหรับนักศึกษาระดับปริญญาตรี 
			  
					 <div class="row">
					
					<div class="col-lg-12 ">
					<div class="form-group"> 
					 
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> สมัครวิชา  </font> 
					<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " readonly    > 
					</div>
					</div> 
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> หน่วยกิต  </font> 
					<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data2; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " readonly   > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อาจารย์ประจําวิชา  </font> 
					<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " readonly   > 
					</div>
					</div>
					
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> จำนวนผู้ช่วยสอนที่เปิดรับสมัคร  </font>   
					  			
					</div>
					</div> 
					
					  
					<div class="col-lg-6 ">
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
					
					<div class="col-lg-9 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ภาระงานผู้ช่วยสอน  </font> 
				 	
					 	<div class="row" style="margin-top: 15px;"> 
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" > ช่วยสอน </font>
						<input type="checkbox" name="chk1" id="chk1" value = "checked"    <?php echo $checkon1; ?> >
						<span class="checkmark"></span>
						</label>
						</div> 
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" >  ช่วยเตรียมการสอบ </font>
						<input type="checkbox" name="chk2" id="chk2" value = "checked"     <?php echo $checkon2; ?> >
						<span class="checkmark"></span>
						</label>
						</div>  
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" >  ตรวจแบบทดสอบ </font>
						<input type="checkbox" name="chk2" id="chk2" value = "checked"     <?php echo $checkon2; ?> >
						<span class="checkmark"></span>
						</label>
						</div> 
						<div class="col-lg-12">  
						<label class="container2"> 
						<font size="3px" color="black" >  อื่นๆ ระบ </font>
						<input type="checkbox" name="chk2" id="chk2" value = "checked"     <?php echo $checkon2; ?> >
						<span class="checkmark"></span>
						</label>
						</div> 
						</div> 
						 
					</div>
					</div> 
					
					
					<div class="col-lg-3 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รวมชั่วโมงการทํางานของผู้ช่วยสอน  </font>  
					<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " readonly   > 
					  			
					</div>
					</div> 
					<div class="col-lg-12 ">
					<div class="form-group">  
					<font color="red" size="3px" class="serif"> (ภาระงานของผู้ช่วยสอนรวมไม่น้อยกว่า 10 ชั่วโมง แต่ไม่เกิน 12 ชั่วโมง/สัปดาห์)  </font>   
					</div>
					</div> 
					<div class="col-lg-12 " align="right">
					<div class="form-group">   
        	
        				<a href="view_subject2.php?CusID=<?php echo $objResult["pk"]; ?>" class="btn btn-primary btn-minwidth" style="width: 130px;  margin-top: 10px; "  >  ส่งใบสมัคร </a> 
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
