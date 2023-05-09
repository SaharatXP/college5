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
		if(empty($_GET["searchname"])){
			
		}else{
			$searchname = $_GET["searchname"];
		}
		
		 
		/// ฟังชั่นในการลบข้อมูล 
	 	if(isset($_GET["Action"])){  
		   if($_GET["Action"] == "Del")
			 {  
				$strSQL = "Delete From classdata  ";
				$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 

					//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
					echo("<script>window.location = 'class.php';</script>"); 
			 }  
		}
 
?> 
     
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5FBFD; " >
           
            <div class="page-title">
              <div class=" ">
               <div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left" >
                <font color="#000000" size="4px" class="serif2"  >
                  <div style="margin-top: 10px;" > 
                     <b> จัดการรายวิชา &nbsp; </b> 
                  </div>
                </font> 
               </div> 
              </div> 
            </div>
            
            <div class="clearfix"></div>
            <div class="row" >
              <div class=" col-lg-12 "  >
                <div class="x_panel"  style="background-color: #FFFFFF; " > 
                 
                 
                   <?php if(empty($_GET["page"])){ ?> 
                			  
                			  
                	<form role="form" name="frmMain" method="post" action="save_class.php" enctype="multipart/form-data" >  
					<div class="row">
					
					<div class="col-lg-8 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รหัสวิชา  </font> 
					<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รับผู้ช่วยสอนจำนวน  </font> 
					<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data2; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อวิชา  </font> 
					<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> หน่วยกิตประจำวิชา  </font> 
					<input type="text" name="data4" id="data4" class="form-control " value="<?php echo $data4; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อาจารย์ประจำวิชา  </font>  
					<select class="form-control" id="data5" name="data5"  style=" border-radius: 10px; margin-top: 10px; "   > 
					<?php 
						$sql = "SELECT * FROM member where status = 'AJ' and pk = '".$data5."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
						<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
					?>   
					<?php 
						$sql = "SELECT * FROM member where status = 'AJ' and pk != '".$data5."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
						<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
					?>   
					</select> 			
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> เปิด Section ทั้งหมด  </font> 
					<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data6; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					 
					 
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ช่วงเวลาเปิดรับสมัคร  </font> 
					<input type="date" name="data7" id="data7" class="form-control " value="<?php echo $data7; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "  required   > 
					</div>
					</div>  
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ช่วงเวลาปิดรับสมัคร </font> 
					<input type="date" name="data8" id="data8" class="form-control " value="<?php echo $data8; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "  required   > 
					</div>
					</div> 
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  นักศึกษาแต่ละ Section ไม่เกิน </font> 
					<input type="text" name="data9" id="data9" class="form-control " value="<?php echo $data9; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
				  
				   
					 
				    <hr>
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รายละเอียด  </font> 
					
						<textarea class="form-control" id="data10" name="data10"><?php echo $data10; ?></textarea>
						 
						<script>
								CKEDITOR.replace('data10');
								function CKupdate() {
								 for (instance in CKEDITOR.instances)
								 CKEDITOR.instances[instance].updateElement();
							 } 
							</script>	
					</div>
					</div>  
					</div>
					  
					</div>
					</div> 
					 
					</div>  
					<br>  
					<div class="row">
					<div class="col-lg-5 " align="center">
					<div class="form-group"> 
					 <div align="center">
						 <button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   เพิ่มข้อมูล </font>  </button> 
						 <button type="reset" class="btn btn-danger"  style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; "> <font color="black" size="3px" class="serif"> ยกเลิก  </font> </button>  
						</div> 
					</div>
					</div>  
					</div> 
					 
					</form> 
					
					 <hr style=" border: 1px solid #003566; ">   
                      
                             <br>
                     
                    <form role="form" name="frmMain" method="get" action="class.php" enctype="multipart/form-data" >  
						<div class="row">
						<div class="col-lg-8">  
							<div class="col-lg-6 ">
							<div class="form-group"> 
							<font color="black" size="3px" class="serif">  ค้นหารหัสวิชา   </font> 
							<input type="text" name="searchname" id="searchname" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off"  style=" border-radius: 10px; "      > <br>
							</div>
							</div>
							<div class="col-lg-2 ">
							<div class="form-group"> 
							<font color="black" size="3px" class="serif">  &nbsp;&nbsp; <br>  </font> 
								 <button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 10px; width: 80px; border-color: white; "> <font color="white" size="3px" class="serif" >   ค้นหา </font>  </button>  
							</div>
							</div> 
						</div> 
						</div> 
					</form> 
                   
                           
                            
                   
                    
                    <div class="table-responsive" >  	
					<table class="table table-bordered" >
					<thead>
					<tr>
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black" color="black"> รหัสวิชา </font></div></th>
						<th width="10%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> ชื่อวิชา </font></div></th>   
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> อาจารย์ประจำวิชา </font></div></th> 
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> ลบ - เเก้ไข </font></div></th>    
					</tr>
					</thead>
					 <tbody>
						<?php 
							$i = 1; 
												  
							//// โหลดข้อมูลการเพิ่ม วิชา 
							$sql = "SELECT * FROM classdata where  data1 like '%".$searchname."%' order by pk desc ";  
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
						<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">    
						<td><div align="center"><font size="2px" color="Black"> <?php echo $objResult["data1"];?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> <?php echo $objResult["data3"];?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> <?php echo $namedata5;?></font></div></td>   
					   
						  
						<td align="center"><div align="center"><a  class="btn btn-warning" href="class.php?CusID=<?php echo $objResult["pk"];?>&page=1" ><font size="2px"> แก้ไข </font></a>  
									   
						<a  class="btn btn-danger" href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult["pk"];?>';}"> <font size="2px"> ลบ </font></a> </a> 
						</div></td>	
						
								
						</tr> 
						<?php  
						$i++;
						}
						?> 
					</tbody>
					</table> 
				    </div>
                			   
                			   
                    <?php } ?>
                    
                    
                    
                    
                    
                    
                    
                       
                    <?php 
					if(isset($_GET["page"])){  
					if($_GET["page"] == "1"){ 
					$sql = "SELECT * FROM classdata Where  pk = '". $_GET["CusID"] ."' ";  
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
					?>
                   <form role="form" name="frmMain" method="post" action="save_class_update.php" enctype="multipart/form-data" >  
                     
					 <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
					 
					 
					 
					<div class="row">
					
					<div class="col-lg-8 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รหัสวิชา  </font> 
					<input type="text" name="data1" id="data1" class="form-control " value="<?php echo $data1; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รับผู้ช่วยสอนจำนวน  </font> 
					<input type="text" name="data2" id="data2" class="form-control " value="<?php echo $data2; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อวิชา  </font> 
					<input type="text" name="data3" id="data3" class="form-control " value="<?php echo $data3; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> หน่วยกิตประจำวิชา  </font> 
					<input type="text" name="data4" id="data4" class="form-control " value="<?php echo $data4; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อาจารย์ประจำวิชา  </font>  
					<select class="form-control" id="data5" name="data5"  style=" border-radius: 10px; margin-top: 10px; "   > 
					<?php 
						$sql = "SELECT * FROM member where status = 'AJ' and pk = '".$data5."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
						<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
					?>   
					<?php 
						$sql = "SELECT * FROM member where status = 'AJ' and pk != '".$data5."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
						<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
					?>   
					</select> 			
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> เปิด Section ทั้งหมด  </font> 
					<input type="text" name="data6" id="data6" class="form-control " value="<?php echo $data6; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					 
					 
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ช่วงเวลาเปิดรับสมัคร  </font> 
					<input type="date" name="data7" id="data7" class="form-control " value="<?php echo $data7; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "  required   > 
					</div>
					</div>  
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ช่วงเวลาปิดรับสมัคร </font> 
					<input type="date" name="data8" id="data8" class="form-control " value="<?php echo $data8; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "  required   > 
					</div>
					</div> 
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  นักศึกษาแต่ละ Section ไม่เกิน </font> 
					<input type="text" name="data9" id="data9" class="form-control " value="<?php echo $data9; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
				  
				   
					 
				    <hr>
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รายละเอียด  </font> 
					
						<textarea class="form-control" id="data10" name="data10"><?php echo $data10; ?></textarea>
						 
						<script>
								CKEDITOR.replace('data10');
								function CKupdate() {
								 for (instance in CKEDITOR.instances)
								 CKEDITOR.instances[instance].updateElement();
							 } 
							</script>	
					</div>
					</div>  
					</div>
					  
					</div>
					</div> 
					 
					</div>  
					<br>  
					<div class="row">
					<div class="col-lg-5 " align="left">
					<div class="form-group"> 
					 <div align="left">
						 <button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   เพิ่มข้อมูล </font>  </button> 
						 
						 <a href="class.php">  
						 <button type="button" class="btn btn-danger"  style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; "> <font color="black" size="3px" class="serif"> ยกเลิก  </font> </button>   </a>
						</div>  
					</div>
					</div>  
					</div> 
					 
					</form>
                   
                   
                    <?php } } ?>
                	<br><Br><br><Br>
                </div>
              </div>
            </div> 
        </div>
        
        
   

<?php
include('footer.php');
?>