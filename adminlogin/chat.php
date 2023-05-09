<?php 
session_start();
$_SESSION["load"] = "8";
include('header.php');
 
 		 $name = "";
		 $title = "";
		 $detail = ""; 
		 
		$searchname = "";
		if(empty($_GET["searchname"])){
			
		}else{
			$searchname = $_GET["searchname"];
		}
		
		 
///// ฟังชั่นในการลบ รายการ ที่สั่งลบ ข้อมูล 
	 	if(isset($_GET["Action"])){  
		   if($_GET["Action"] == "Del")
			 {  
				$strSQL = "Delete From boardroom  ";
				$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 

					//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
					echo("<script>window.location = 'chat.php';</script>"); 
			 }  
		}
 
?> 
   <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
       
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
       
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5FBFD; " >
           
            <div class="page-title">
              <div class=" ">
               <div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left" >
                <font color="#000000" size="4px" class="serif2"  >
                  <div style="margin-top: 10px;" > 
                     <b> จัดการห้องพูดคุย &nbsp; </b> 
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
                			  
                		<link href="../select2.min.css" rel="stylesheet" />
						<script src="../select2.min.js"></script>  
 
               		<!--- Action =  ไปยังไฟล์ที่ทำการเช็ค  --->
                	<form role="form" name="frmMain" method="post" action="save_chat.php" enctype="multipart/form-data" >  
					<div class="row">
					
					<div class="col-lg-7 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อห้อง  </font> 
					<input type="text" name="title" id="title" class="form-control " value="<?php echo $title; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> วิชา  </font> 
					<select class="form-control   " id="subject" name="subject" style=" border-radius: 10px; margin-top: 10px; "     required   >  
							 <option value=""> วิชา </option>  
							 <?php  
							   $sql2 = "SELECT * FROM classdata  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data3"]; ?> </option>     
							<?php  
								}
							?>  
							</select>  
					</div>
					</div> 
					</div>
					 
				  
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รายละเอียด  </font>  
					
						<textarea class="form-control" id="detail" name="detail"><?php echo $detail; ?></textarea>
						 
						<script>
								CKEDITOR.replace('detail');
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
                     
                    <!--- Action =  ไปยังไฟล์ที่ทำการเช็ค  ---> 
                    <form role="form" name="frmMain" method="get" action="chat.php" enctype="multipart/form-data" >  
						<div class="row">
						<div class="col-lg-8">  
							<div class="col-lg-4 ">
							<div class="form-group"> 
							<font color="black" size="3px" class="serif">  ค้นหาหัวข้อ   </font> 
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
						<font size="2px" color="black" color="black"> ลำดับ </font></div></th>
						<th width="20%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> ชื่อห้อง </font></div></th>   
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> วิชา </font></div></th>  
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> จำนวนสมาชิก </font></div></th> 
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> ลบ - เเก้ไข </font></div></th>    
					</tr>
					</thead>
					  <tbody>
						<?php 
							$i = 1; 
												  
							//// โหลดรายการที่เพิ่มไป เรียงจาก ล่าสุด ไป เก่าสุด
							$sql = "SELECT * FROM boardroom   
							where  title like '%".$searchname."%' order by pk desc ";  
							$query = mysqli_query($con,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{      
								$namedata1 = $objResult["title"];
								$namedata2 = $objResult["subject"];
								$namedata3 = $objResult["detail"];
							
								$sql2 = "SELECT * FROM classdata Where  pk = '". $namedata2 ."' ";  
								$query2 = mysqli_query($objCon,$sql); 
								while($objResult2 = mysqli_fetch_array($query))
								{ 
										$data3 = $objResult["data3"];  
								} 
						?>
						<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">    
						<td><div align="center"><font size="2px" color="Black"> <?php echo $i;?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> <?php echo $namedata1;?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> <?php echo $namedata2;?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> 0 </font></div></td>   
					   
						  
						<td align="center"><div align="center"><a  class="btn btn-warning" href="chat.php?CusID=<?php echo $objResult["pk"];?>&page=1" ><font size="2px"> แก้ไข </font></a>  
									   
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
                			   
                			  
                	<br><Br><br><Br>
                    <?php } ?>
                    
                    
                    
                    
                     <?php 
					if(isset($_GET["page"])){  
					if($_GET["page"] == "1"){ 
					$sql = "SELECT * FROM boardroom Where  pk = '". $_GET["CusID"] ."' ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{ 
							$title = $objResult["title"]; 
							$detail = $objResult["detail"];
							$subject = $objResult["subject"];  
				 
					} 
					?>
                
					
                			  
                	 <form role="form" name="frmMain" method="post" action="save_chat_update.php" enctype="multipart/form-data" > 
					 <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
					 
				 	   
					<div class="row">
					
					<div class="col-lg-7 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อห้อง  </font> 
					<input type="text" name="title" id="title" class="form-control " value="<?php echo $title; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> วิชา  </font> 
					<select class="form-control   " id="subject" name="subject" style=" border-radius: 10px; margin-top: 10px; "     required   >   
							 <?php  
							   $sql2 = "SELECT * FROM classdata where pk = '".$subject."'  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data3"]; ?> </option>     
							<?php  
								}
							?>    
							 <?php  
							   $sql2 = "SELECT * FROM classdata where pk != '".$subject."'  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data3"]; ?> </option>     
							<?php  
								}
							?>  
							</select>  
					</div>
					</div> 
					</div>
					 
				  
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รายละเอียด  </font>  
					
						<textarea class="form-control" id="detail" name="detail"><?php echo $detail; ?></textarea>
						 
						<script>
								CKEDITOR.replace('detail');
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
						 
						 <a href="chat.php">  
						 <button type="button" class="btn btn-danger"  style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; "> <font color="black" size="3px" class="serif"> ยกเลิก  </font> </button>   </a>
						</div> 
					</div>
					</div>  
					</div> 
					 
					</form> 
               
               
                    <?php } } ?>
                </div>
              </div>
            </div> 
        </div>
        
        
   

<?php
include('footer.php');
?>