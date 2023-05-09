<?php 
session_start();
$_SESSION["load"] = "9";
include('header.php');
 
 		 $name = "";
		 $title = "";
		 $telphone = ""; 
		 $email = ""; 
		 $address = ""; 
		 $username = ""; 
		 $password = ""; 
		 $status = ""; 
		 $img = ""; 
		 
 

		$searchname = "";
		if(empty($_GET["searchname"])){
			
		}else{
			$searchname = $_GET["searchname"];
		}
		
		 /// ฟังชั่นในการลย ข้อมูล
	 	if(isset($_GET["Action"])){  
		   if($_GET["Action"] == "Del")
			 {  
				$strSQL = "Delete From member  ";
				$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 

					//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
					echo("<script>window.location = 'profile.php';</script>"); 
			 }  
		}
		/*
		$sql = "SELECT * FROM member Where  pk = '". $_SESSION["UserID"] ."' ";   
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name = $objResult["name"]; 
			$email = $objResult["email"]; 
			$telphone = $objResult["telphone"]; 
			$address = $objResult["address"]; 
			$username = $objResult["username"];  
			$password = $objResult["password"];  
			$status = $objResult["status"];  
			$img = $objResult["img"];  
		} 
		*/

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
        
        
		<script> 

		function validateForm()
		{ 
		  var x1 = document.getElementById("password").value;
		  var x2 = document.getElementById("repassword").value; 
			
		  if (x1 != x2) {
			alert(" Password และ Re-Password ไม่ตรงกัน ");
			return false;
		  } 
			 
			
			
					var checkuser =  document.getElementById("username").value; 
					<?php
					$intRows = 0;
					$strSQL = "SELECT * FROM member order by pk asc ";
					$objQuery =  mysqli_query($objCon,$strSQL);
					$intRows = 0;
					while($objResult = mysqli_fetch_array($objQuery))
					{
					$intRows++;
					?>			
						x = <?php echo $intRows;?>;
						mySubList = new Array(); 
						strGroup = "<?php echo $objResult["username"];?>"; 
						mySubList[x,0] = strGroup; 
						if (mySubList[x,0] == checkuser){
							 alert("username  ซ้ำในระบบกรุณาทำการกรอกใหม่ ");
							 document.getElementById("username").value = "";
							 return false;
						}
					<?php
					}
					?>																	
				}

		</script>
      
      
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5FBFD; " >
           
            <div class="page-title">
              <div class=" ">
               <div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left" >
                <font color="#000000" size="4px" class="serif2"  >
                  <div style="margin-top: 10px;" > 
                     <b> จัดการข้อมูลผู้ใช้งาน &nbsp; </b> 
                  </div>
                </font> 
               </div> 
              </div> 
            </div>
            
            <div class="clearfix"></div>
            <div class="row" >
              <div class=" col-lg-12 "  >
                <div class="x_panel"  style="background-color: #FFFFFF; " > 
                 
                 
                   <?php if(empty($_GET["page"])){  
						$sql = "SELECT * FROM teacher_copy2 Where  pk = '". $_GET["CusID"] ."' ";     
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{ 
							$data1 = $objResult["data1"];   
							$data2 = $objResult["data2"];   
							$data3 = $objResult["data3"];   
							$data4 = $objResult["data4"];   
							$data5 = $objResult["data5"];   
							$data6 = $objResult["data6"];   
						} 
					?>
              		 
               		<form role="form" name="frmMain" method="post" action="save_profile.php" enctype="multipart/form-data"  onsubmit="return validateForm()" >
					 
					<div class="row">
					
					<div class="col-lg-8 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> รหัสเจ้าหน้าที่   </font> 
					<input type="text" name="codestudent" id="codestudent" class="form-control " value="<?php echo $data1; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-12 "> </div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อ-นามสกุล  </font> 
					<input type="text" name="name" id="name" class="form-control " value="<?php echo $data2." ".$data3; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อ-นามสกุล (ภาษาอังกฤษ)  </font> 
					<input type="text" name="name2" id="name2" class="form-control " value="<?php echo $data4." ".$data5; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div>   
					</div>
					
					
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> สถานที่ติดต่อ  </font> 
					<input type="text" name="address" id="address" class="form-control " value="<?php echo $address; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div>
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อีเมล์  </font> 
					<input type="email" name="email" id="email" class="form-control " value="<?php echo $email; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> เบอร์โทรศัพท์  </font> 
					<input type="text" name="telphone" id="telphone" class="form-control " value="<?php echo $telphone; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" > 
					</div>
					</div>   
					</div>
					
					<div class="row"  id="display2"  >
					<div class="col-lg-12 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> สถานะ  </font> &nbsp;&nbsp; <Br>
					 
					<?php
						$color1 = "#A9A9A9";	
						$color2 = "#A9A9A9";
							if($status == "A"){
								$color1 = "#FCA311";	 

							}else if($status == "AJ"){ 
								$color2 = "#FCA311";

							}

						?>
						
					 <input type="hidden" name="title" id="title" class="form-control " value="<?php echo $status; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					 
					 <button type="button" id="btnstatus1" class="btn btn-danger" style="background-color: <?php echo $color1; ?>; border-radius: 10px;  width: 120px; border-color: white; margin-top: 10px; " onclick="Sstatus1()"  ><font color="black"  size="3px" class="serif1"  > เจ้าหน้าที่ </font></button>  
                 		 
                     <button type="button"  id="btnstatus2" class="btn btn-danger" style="background-color: <?php echo $color2; ?>; border-radius: 10px;  width: 120px; border-color: white; margin-top: 10px; "  onclick="Sstatus2()" ><font color="black"  size="3px" class="serif1"  > อาจารย์ </font></button>  
                        
                        
                           <script>
							function Sstatus1() {
							 document.getElementById("btnstatus1").style.backgroundColor = "#FCA311";
							 document.getElementById("btnstatus2").style.backgroundColor = "#A9A9A9";
								
								document.getElementById("title").value = "A";
								
								
							}
							function Sstatus2() {
							 document.getElementById("btnstatus1").style.backgroundColor = "#A9A9A9";
							 document.getElementById("btnstatus2").style.backgroundColor = "#FCA311";
								
								document.getElementById("title").value = "AJ";
							}
							</script>	
					</div>
					</div>
					</div>
					
					 
					 
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> username  </font> 
					<input type="text" name="username" id="username" class="form-control " value="<?php echo $username; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "   required      > 
					</div>
					</div> 
					<div class="col-lg-12 "> </div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> password </font> 
					<input type="text" name="password" id="password" class="form-control " value="<?php echo $password; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " required    > 
					</div>
					</div>  
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> re-password </font> 
					<input type="text" name="repassword" id="repassword" class="form-control " value="<?php echo $repassword; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " required    > 
					</div>
					</div> 
					</div>
				   
					</div>
					</div> 
					 
					 
					 <div class="col-lg-1 ">
					 </div>
					
					 <div class="col-lg-2 ">
					 <div class="form-group" > <br>  
					 <font color="black" size="3px" class="serif">  รูปภาพ   </font> 
					 <br> 
					 	<?php
								if(empty($img)){
									$show_img2 = "images/user.png";
								}else{ 
									$show_img2 = "../img/".$img;
								}
								?> 
						 <img id="blah" src="<?php echo $show_img2 ?>" alt="your image" width="150px" /> 
						 <Br>
						 <Br>
						 <input type="file"  name="img" onchange="readURL(this);"  class="form-control"  />  
					 </div>
					 </div>
					 
					</div>  
					<br>  
					<div class="row">
					<div class="col-lg-5 " align="left">
					<div class="form-group"> 
					 <div align="left">
						 <button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   เพิ่มข้อมูล </font> </button> 
						 
						 <a href="profile.php"> 
						 <button type="button" class="btn btn-danger"  style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; "> <font color="black" size="3px" class="serif"> ยกเลิก  </font> </button>    </a>
						</div> 
					</div>
					</div>  
					</div> 
               		</form>
              	   
                	<br><Br><br><Br>
               	  <?php   } ?>	
               	  
               	  
                </div>
              </div>
            </div> 
        </div>
        
        
   

<?php
include('footer.php');
?>