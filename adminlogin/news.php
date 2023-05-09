<?php 
session_start();
$_SESSION["load"] = "2";
include('header.php');
 
 		 $name = "";
		 $title = "";
		 $detail = ""; 
		 $headdata = ""; 
		 

		/// ฟังชั่นในการลย ข้อมูล
	 	if(isset($_GET["Action"])){  
		   if($_GET["Action"] == "Del")
			 {  
				$strSQL = "Delete From news_report2  ";
				$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 

					//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
					echo("<script>window.location = 'news.php';</script>"); 
			 }  
		}
 
   		if($_GET["Action"] == "Del2")
		{  
			$strSQL = "Delete From images2  ";
			$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
			echo("<script>window.location = 'news.php?CusID=".$_GET["bill_no"]."&page=2';</script>"); 
		}   



		$searchname = "";
		if(empty($_GET["searchname"])){
			
		}else{
			$searchname = $_GET["searchname"];
		}
		
		 
	$strSQL = "Delete From images2  ";
	$strSQL .="WHERE bill_no = '' ";
	$objQuery = mysqli_query($objCon,$strSQL);
		 
?> 
    
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
       
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5FBFD; " >
           
            <div class="page-title">
              <div class=" ">
               <div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left" >
                <font color="#000000" size="4px" class="serif2"  >
                  <div style="margin-top: 10px;" > 
                     <b> จัดการประกาศ &nbsp; </b> 
                  </div>
                </font> 
               </div> 
              </div> 
            </div>
            
            <div class="clearfix"></div>
            <div class="row" >
              <div class=" col-lg-12 "  >
                <div class="x_panel"  style="background-color: #FFFFFF; " > 
                 
                 
                     <!--- ฟังชั้นในการ เพิ่มรายการ --->
                   <?php if(empty($_GET["page"])){ ?> 
                		<link href="../select2.min.css" rel="stylesheet" />
						<script src="../select2.min.js"></script>  
   
               	
                	     <style>  
					   .downtopup{ 
						  			margin-top: 5px;
							}
						@media only screen and (min-width: 768px){
								.downtopup{ 
						  			margin-top: 22px;
							}
						} 
					 </style>
               	
                		 <form role="form" name="frmMain" method="post" action="save_news2.php" enctype="multipart/form-data" >  
					<div class="row">
					
					<div class="col-lg-7 ">
					<div class="form-group"> 
					 
					 
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  ชื่อประกาศ  </font> 
					<input type="text" name="headdata" id="headdata" class="form-control " value="<?php echo $headdata; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					
					
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> หัวข้อประกาศ  </font>  
					<select class="form-control  myselect" id="title" name="title"    required   >   
							 <?php  
							   $sql2 = "SELECT * FROM drop_type2  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["name"]; ?> </option>     
							<?php  
								}
							?>  
							</select> 
							   <script type="text/javascript">
								 $(".myselect").select2();
							</script>
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  ประกาศโดย  </font>   
					<select class="form-control  myselect" id="createby" name="createby"    required   >   
							 <?php  
							   $sql2 = "SELECT * FROM member WHERE status = 'AJ' OR status = 'A' order by status asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["name"]; ?> </option>     
							<?php  
								}
							?>  
							</select> 
							   <script type="text/javascript">
								 $(".myselect").select2();
							</script>
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  วันที่ประกาศ  </font> 
					<input type="date" name="datestart" id="datestart" class="form-control " value="<?php echo date('Y-m-d'); ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  เลือกวิชา  </font>  
					<select class="form-control  myselect" id="subject" name="subject"    required   >   
							 <?php  
							   $sql2 = "SELECT * FROM classdata  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data1"] . '- ' . $objResult2["data2"]; ?> </option>     
							<?php  
								}
							?>  
							</select> 
							   <script type="text/javascript">
								 $(".myselect").select2();
							</script>
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รูปภาพ  </font> 
						
						<!-- CSS --> 
						<link href="uploadimg/dropzone.css" rel="stylesheet" type="text/css">

						<!-- Script -->
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
						<script src="uploadimg/dropzone.js" type="text/javascript"></script>

							<div class="container" style="margin-top: 10px;" >
								<div class='content'>
								<div class="dropzone" id="myAwesomeDropzone"> </div>  
								</div> 
							</div>

							<!-- Script -->
							 <script type='text/javascript'>
								Dropzone.autoDiscover = false;
								  Dropzone.options.myAwesomeDropzone = {
								  init: function() {
										this.on("thumbnail", function(file, response) {
											console.log(file); // will send to console all available props
											file.previewElement.addEventListener("click", function() {

											var id = jQuery(file.previewElement).find('.dz-filename span').html();  
												// alert(file.name + " //// " + id);
												 $('#smallmodal').modal('show', true);
												 document.getElementById("myImg").src = "uploads/"+id;
											});
										});
								  }
								}; 
								  $(".dropzone").dropzone({
									url: "ajaxfile2.php",
									addRemoveLinks: true,   
									clickable: true, 
									success: function (file, response) {

										var name = file.name; 
										if(response != 0){
											// Download link

											jQuery(file.previewElement).find('.dz-filename span').html(response);
											var id = jQuery(file.previewElement).find('.dz-filename span').html();  

											//var anchorEl = document.createElement('a');
											//anchorEl.setAttribute('href',"uploads/"+response);
											//anchorEl.setAttribute('target','_blank');
											//anchorEl.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp; <font color ='red'> View </font>";
											//file.previewTemplate.appendChild(anchorEl);



										}   

									},
									removedfile: function(file, response) {
									 var id = jQuery(file.previewElement).find('.dz-filename span').html();  
														$.ajax({
															type: 'POST',
															url: 'upload2.php',
															data: {name: id,request: 2},
															sucess: function(data){
																console.log('success: ' + data); 
															}
														});

										var _ref;
										return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
									}
								}); 
							 </script>

							 <!-- modal small -->
							 <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel">  <font size="3px" color="black"  class="serifSB">   ดูข้อมูล </font> </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												<img id="myImg" src="../img/blank.png" width="100%" > 
											</div> 
											</div>
										</div>
							 </div>
							 <!-- end modal small --> 
 
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 " style="display: none; " >
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อัพโหลดฟอร์มการรับสมัคร  </font>  
						 <input type="file"  name="img2"   class="form-control"  />  
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
                     
                    <form role="form" name="frmMain" method="get" action="news.php" enctype="multipart/form-data" >  
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
						<th width="2%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black" color="black"> ลำดับ </font></div></th>
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> หัวข้อ </font></div></th>   
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> ประกาศโดย </font></div></th>   
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> วันที่ประกาศ </font></div></th>  
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> รายละเอียด </font></div></th> 
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> รูปภาพ </font></div></th> 
						<th width="5%" bgcolor="#A8DADC"><div align="center"> 
						<font size="2px" color="black"> ลบ - เเก้ไข </font></div></th>    
					</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							$img = "";
							$img_all = "";
												  
							/// โหลดข้อมูลที่ได้ทำการเพิ่มไปล่าสุดมาแสดง
							$sql = "SELECT * FROM news_report2 where  title like '%".$searchname."%' order by pk desc ";  
							$query = mysqli_query($con,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{      
								
								$img = ""; 
								$img = $objResult["img"];
								 
							   $namesub = "";
							   $sql2 = "SELECT * FROM classdata where pk = '".$objResult["subject"]."'   order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{ 
										$namesub = $objResult2["name"]; 
								}
							   $namesub2 = "";
							   $sql2 = "SELECT * FROM member where pk = '".$objResult["createby"]."'   order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{ 
										$namesub2 = $objResult2["name"]; 
								}
							   $namesub3 = "";
							   $sql2 = "SELECT * FROM drop_type2 where pk = '".$objResult["title"]."'   order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{ 
										$namesub3 = $objResult2["name"]; 
								}
									
						?>
						<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">   
						<td><div align="center"><font size="2px" color="Black"> <?php echo $i;?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> <?php echo $namesub3;?></font></div></td>     
						<td><div align="center"><font size="2px" color="Black"> <?php echo $namesub2;?></font></div></td>   
						<td><div align="center"><font size="2px" color="Black"> <?php echo DateThai($objResult["datestart"])." ".DateThai2($objResult["datestart"]);?></font></div></td>   
					   
						 
						<td><div align="center"><font size="4px"  color="Black">
                        <div class="product_count">
						<a data-toggle="modal" data-target="#smallmodal<?php echo $objResult["pk"]; ?>" data-id="<?php echo $i; ?>" style="cursor: pointer;"  ><font color="Blue" size="2px" >   คลิก </font>  </a>
						</div>
						</font></div></td>  
							
								  <!-- modal small -->
							<div class="modal fade" id="smallmodal<?php echo $objResult["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> 
										<font size="3px" color="black">  <?php echo $objResult["title"]; ?> </font> </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										
										<font size="3px" color="black">   
										<div class="row">
											<div class="col-lg-12"> 
												<div class="col-lg-12">  
													รายละเอียด   : <br>
													 <?php echo $objResult["detail"]; ?> <br><br>  
												</div>
												 
											</div>
										</div> 
										</font> 
										
										
										</div> 
										</div>
									</div>
							</div>
						 <!-- end modal small --> 
						 
						   
						 <td align="center"><div align="center"><a  class="btn btn-sm  btn-warning" href="news.php?CusID=<?php echo $objResult["bill_no"];?>&page=2" ><font size="2px"> แก้ไขรูป </font></a>  </div></td>	
										
										
										
						<td align="center"><div align="center"><a  class="btn  btn-sm  btn-warning" href="news.php?CusID=<?php echo $objResult["pk"];?>&page=1" ><font size="2px"> แก้ไข </font></a>  
									   
						<a  class="btn btn-sm  btn-danger" href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult["pk"];?>';}"> <font size="2px"> ลบ </font></a> </a> 
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
                    
                     
                     <!--- ฟังชั้นในการแก้ไข  ข้อความ --->
                    <?php 
					if(isset($_GET["page"])){  
					if($_GET["page"] == "1"){ 
					$sql = "SELECT * FROM news_report2 Where  pk = '". $_GET["CusID"] ."' ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{ 
							$title = $objResult["title"]; 
							$detail = $objResult["detail"];
							$img = $objResult["img"]; 
							$datafile = $objResult["datafile"]; 
							$subject = $objResult["subject"]; 
							$createby = $objResult["createby"]; 
							$datestart = $objResult["datestart"]; 
							$headdata = $objResult["headdata"]; 
				 
					} 
					?>
                		<link href="../select2.min.css" rel="stylesheet" />
						<script src="../select2.min.js"></script>  
   
               	
                    <form role="form" name="frmMain" method="post" action="save_news_update2.php" enctype="multipart/form-data" > 
                     
					 <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
					 
				 	  
					  <div class="row">
					
					<div class="col-lg-6 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  ชื่อประกาศ  </font> 
					<input type="text" name="headdata" id="headdata" class="form-control " value="<?php echo $headdata; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
				
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> หัวข้อประกาศ  </font>  
					<select class="form-control  myselect" id="title" name="title"    required   >   
							 <?php  
							   $sql2 = "SELECT * FROM drop_type2 where pk = '".$title."'  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["name"]; ?> </option>     
							<?php  
								}
							?>    
							 <?php  
							   $sql2 = "SELECT * FROM drop_type2 where pk != '".$title."'  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["name"]; ?> </option>     
							<?php  
								}
							?>  
							</select> 
							   <script type="text/javascript">
								 $(".myselect").select2();
							</script>
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  ประกาศโดย  </font>   
					<select class="form-control  myselect" id="createby" name="createby"    required   >   
							 <?php  
							   $sql2 = "SELECT * FROM member where pk = '".$createby."'  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["name"]; ?> </option>     
							<?php  
								}
							?>  
							 <?php  
							   $sql2 = "SELECT * FROM member  where pk != '".$createby."'   order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["name"]; ?> </option>     
							<?php  
								}
							?>  
							</select> 
							   <script type="text/javascript">
								 $(".myselect").select2();
							</script>
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  วันที่ประกาศ  </font> 
					<input type="date" name="datestart" id="datestart" class="form-control " value="<?php echo $datestart; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					 
					<div class="row">
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif">  เลือกวิชา  </font>  
					<select class="form-control  myselect" id="subject" name="subject"    required   >   
							 <?php  
							   $sql2 = "SELECT * FROM classdata where pk = '".$subject."'  order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data1"]; ?> </option>     
							<?php  
								}
							?>    
							 <?php  
							   $sql2 = "SELECT * FROM classdata   where pk != '".$subject."'   order by pk asc "; 
							   $query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
							{  
							?>     
							<option value="<?php echo $objResult2["pk"]; ?>"> <?php echo $objResult2["data1"]; ?> </option>     
							<?php  
								}
							?>  
							</select> 
							   <script type="text/javascript">
								 $(".myselect").select2();
							</script>
					</div>
					</div> 
					</div>
					
					  
					<div class="row">
					<div class="col-lg-12 " style="display: none; " >
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อัพโหลดฟอร์มการรับสมัคร  </font>  
					 
					 <?php
							if(empty($datafile)){
								$datafile = "";
							}else{ 
								$datafile = "../img/".$datafile;
					?>
						<BR>
						<a href="<?php echo $datafile; ?>" target="_blank">
						<font color="red" size="3px" class="serif">  ดูไฟล์เก่า  </font>  </a>
						
						<font color="red" size="3px" class="serif"> *** การอัพไฟล์ใหม่จะเป้นการทับไฟล์เก่าก่อนหน้า   </font>  
						<BR> 
					<?php
							}
						?>  
						 <input type="file"  name="img2"   class="form-control"  />  
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
					<div class="col-lg-4 ">
					<div class="form-group"> 
					 <div align="left">
						 <button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   อัพเดต </font> </button> 
						 
						 
						 <a href="news.php">  
						 <button type="button" class="btn btn-danger"  style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; "> <font color="black" size="3px" class="serif"> ยกเลิก  </font> </button>  
						 </a>
					  </div> 
					</div>
					</div>  
					</div> 
					 
					</form> 
                    <?php } } ?>
                    
                    
                    
                    
                     <?php 
					if(isset($_GET["page"])){  
					if(($_GET["page"] == "2")){  
						$_SESSION["sessionupdate"] = "";
						if(empty($_GET["CusID"])){
							
						}else{
							$_SESSION["sessionupdate"] = $_GET["CusID"];	
						} 
					?>
                     
                     <!--- ฟังชั้นในการแก้ไข รูปภาพ ทั้งหมด --->
                      
           	  		  <div class="table-responsive"> 
					   <div class="card-body">
                  		
                  		 
                    	<form role="form" name="frmMain" method="post" action="save_news_update3.php" enctype="multipart/form-data" >
                    
					<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
         	  		  
         	  		  <div class="row">
         	  		  	<div class="col-lg-12">
         	  		  	<div class="col-lg-6 ">
						<div class="form-group">   <br> 
						<font color="black" size="3px" class="serif">  อัพโหลดรูปภาพ  </font> 

						<!-- CSS --> 
						<link href="uploadimg/dropzone.css" rel="stylesheet" type="text/css">

						<!-- Script -->
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
						<script src="uploadimg/dropzone.js" type="text/javascript"></script>

							<div class="container" style="margin-top: 10px;" >
								<div class='content'>
								<div class="dropzone" id="myAwesomeDropzone"> </div>  
								</div> 
							</div>

							<!-- Script -->
							 <script type='text/javascript'>
								Dropzone.autoDiscover = false;
								  Dropzone.options.myAwesomeDropzone = {
								  init: function() {
										this.on("thumbnail", function(file, response) {
											console.log(file); // will send to console all available props
											file.previewElement.addEventListener("click", function() {

											var id = jQuery(file.previewElement).find('.dz-filename span').html();  
												// alert(file.name + " //// " + id);
												 $('#smallmodal').modal('show', true);
												 document.getElementById("myImg").src = "uploads/"+id;
											});
										});
								  }
								}; 
								  $(".dropzone").dropzone({
									url: "ajaxfile2.php",
									addRemoveLinks: true,   
									clickable: true, 
									success: function (file, response) {

										var name = file.name; 
										if(response != 0){
											// Download link

											jQuery(file.previewElement).find('.dz-filename span').html(response);
											var id = jQuery(file.previewElement).find('.dz-filename span').html();  

											//var anchorEl = document.createElement('a');
											//anchorEl.setAttribute('href',"uploads/"+response);
											//anchorEl.setAttribute('target','_blank');
											//anchorEl.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp; <font color ='red'> View </font>";
											//file.previewTemplate.appendChild(anchorEl);



										}   

									},
									removedfile: function(file, response) {
									 var id = jQuery(file.previewElement).find('.dz-filename span').html();  
														$.ajax({
															type: 'POST',
															url: 'upload2.php',
															data: {name: id,request: 2},
															sucess: function(data){
																console.log('success: ' + data); 
															}
														});

										var _ref;
										return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
									}
								}); 
							 </script>

							 <!-- modal small -->
							 <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel">  <font size="3px" color="black"  class="serifSB">   ดูข้อมูล </font> </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												<img id="myImg" src="../img/blank.png" width="100%" > 
											</div> 
											</div>
										</div>
							 </div>
							 <!-- end modal small --> 

						</div>
						</div>
         	  		  	</div>
         	  		   </div>
          	  		  
                   		<div class="row">
						<div class="col-lg-6 " align="center">
						<div class="form-group"> 
						 <div align="center">
							 <button type="submit" class="btn btn-primary" style="background-color: #1BB394; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   อัพเดตข้อมูล </font>  </button> 

							<a href="index.php">  
							 <button type="button" class="btn btn-danger"  style="background-color: #ED5666; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #ED5666; "> <font color="white" size="3px" class="serif"> ยกเลิก  </font> </button>   </a>
							</div> 
						</div>
						</div>  
						</div> 
                   
					</form>
                 		
                 		
                  		
                  		<hr>
                   		<div class="row">
							<div class="col-lg-12 ">
							<div class="form-group"> 
							<?php 	
							$sql = " SELECT * FROM images2  where  bill_no = '".$_GET["CusID"]."' order by pk desc "; 
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
							?>
							<div class="col-lg-2 "  style="margin-top: 10px;" align="center">
							<a data-toggle="modal" data-target="#smallmodal<?php echo $objResult["pk"]; ?>" style="cursor: pointer; "  > <img src="uploads/<?php echo $objResult["img"]; ?>" width="100%"  >
							</a> 
							
								<!-- modal small -->
								<div class="modal fade" id="smallmodal<?php echo $objResult["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
											<?php if(empty($objResult["img"])){ }else{ ?>
											<img src="uploads/<?php echo $objResult["img"]; ?>" width="100%" style="height: 450px;" >
											<?php } ?>
										</div> 
										</div>
									</div>
								</div>
								<!-- end modal small --> 
							
							<div style="margin-top: 5px" >  
							<a class="btn btn-danger" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del2&CusID=<?php echo $objResult["pk"];?>&bill_no=<?php echo $_GET["CusID"];?>';}"><font size="3px" class="serif" > ลบ </font></a>  
							</div>
							</div>
							 <?php } ?>
							</div>
							</div>  
						</div> 
                    	
                    	 
					  </div>
					  </div>
                     
                    <?php } } ?>
                    
                    
                </div>
              </div>
            </div> 
        </div>
        
        
   

<?php
include('footer.php');
?>