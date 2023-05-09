<?php 
session_start();
$_SESSION["load"] = "12";
include('header.php');
 
 			$sql = "SELECT * FROM member Where  pk = '". $_GET["CusID"] ."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name = $objResult["name"];    
				$address = $objResult["address"];    
				$telphone = $objResult["telphone"];    
				$email = $objResult["email"];    
				$username = $objResult["username"];    
				$password = $objResult["password"];    
				$img = $objResult["img"];    
				$codestudent = $objResult["codestudent"];    
				$subject = $objResult["subject"];    
				$major = $objResult["major"];    
				$major2 = $objResult["major2"];     
				$major3 = $objResult["major3"];       
				$img2 = $objResult["img2"];       
				$img3 = $objResult["img3"];       
				$img4 = $objResult["img4"];       
			}
		$show_img = "";
 
?> 
      
       
       
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5FBFD; " >
           
            <div class="page-title">
              <div class=" ">
               <div class=" col-lg-12 " style="background-color: #A9C7FF;   margin-top: 20px;  " align="left" >
                <font color="#000000" size="4px" class="serif2"  >
                  <div style="margin-top: 10px;" > 
                     <b> ตรวจสอบข้อมูลนักศึกษาและผู้ช่วย   &nbsp; </b> 
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
                			   
                <br> 
					 
             <div class="row">
    		<div class="col-md-2">
       		<font color="black" size="3px" class="serif">     </font> 
			 <br> 
			<?php
				if(empty($img)){
					$show_img2 = "../images/up.png";
				}else{ 
					$show_img2 = "../img/".$img;
				} 
			?> 
			<img id="blah" src="<?php echo $show_img2 ?>" alt="your image" width="100%"  /> 
			 <Br> 
       	  
        	</div>
    		 <div class="col-md-9"> 
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >   Username:</font> <!--- User เก็บ User ในการล็อกอิน --->
                    <input type="text" class="form-control" id="username" name="username" required="" value="<?php echo $username; ?>" readonly  style="border-radius: 5px;"  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >  รหัสเจ้าหน้าที่ : </font> <!--- User เก็บ User ในการล็อกอิน --->
                    <input type="text" class="form-control" id="codestudent" name="codestudent" required="" value="<?php echo $codestudent; ?>"     style="border-radius: 5px;" readonly >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >  ชื่อ :</font> <!--- เก็บชื่อผู้ใช้งาน   --->
                    <input type="text" class="form-control" id="name" name="name" required="" value="<?php echo $name; ?>" style="border-radius: 5px;" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >  ระดับการศึกษา : </font> <!--- User เก็บ User ในการล็อกอิน --->
                    <select class="form-control" id="subject" name="subject" required   style="border-radius: 5px;"   readonly > 
					  <?php 
						$sql = "SELECT * FROM drop_subject where name = '".$subject."' order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
					<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
						?>     
				  </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >  Email : </font> <!---  เก็บ EMail   --->
                    <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email; ?>"  style="border-radius: 5px;" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >   คณะ : </font> <!--- เก็บที่อยู่--->
                    <input type="text" class="form-control" id="major3" name="major3" required="" value="<?php echo $major3; ?>"  style="border-radius: 5px;"  readonly>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >  รหัสผ่าน : </font> <!---  เก็บ Password ในการล็อกอิน  --->
                    <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password; ?>"  style="border-radius: 5px;"  readonly>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >   สาขา : </font> <!--- เก็บที่อยู่--->
                    <input type="text" class="form-control" id="major" name="major" required="" value="<?php echo $major; ?>"  style="border-radius: 5px;"  readonly>
                </div>
            </div> 
           
               <div class="col-md-6">
                <div class="form-group">
                     <font color = '#000' size = '3px' >   โครงการ : </font> <!--- เก็บที่อยู่--->
                    <select class="form-control" id="major2" name="major2" required   style="border-radius: 5px;"     readonly > 
					  <?php 
						$sql = "SELECT * FROM drop_type where name = '".$major2."' order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
					<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
						?>   
				  </select>
                </div>
            </div>
					<div class="col-md-6">
						<div class="form-group">
							  <font color = '#000' size = '3px' > เบอร์โทรศัพท์ : </font> <!--- เก็บที่อยู่--->
							<input type="text" class="form-control" id="telphone" name="telphone" required="" value="<?php echo $telphone; ?>"  style="border-radius: 5px;" readonly  >
						</div>
					</div> 



					<div class="col-md-6">
						<div class="form-group">
							  <font color = '#000' size = '3px' >  อัพโหลดสำเนาบัตรประชาขชน  : </label> <!--- เก็บที่อยู่--->
							 <?php
								if(!empty($img2)){
								$show_img2 = "../img/".$img2;
							?> 
							<a href="<?php echo $show_img2 ?>" target="_blank">  
							 <font color="green">(คลิก) ดูไฟล์ </font>  </a>
							<?php
								} 
							?> 
						</div>
					</div> 
            
            

					<div class="col-md-6">
						<div class="form-group">
							  <font color = '#000' size = '3px' >  อัพโหลดสำเนาทะเบียนบ้าน  : </font> <!--- เก็บที่อยู่--->
							 <?php
								if(!empty($img3)){
								$show_img2 = "../img/".$img3;
							?> 
							<a href="<?php echo $show_img2 ?>" target="_blank">  
							 <font color="green">(คลิก) ดูไฟล์ </font>  </a>
							<?php
								} 
							?> 
							   
						</div>
					</div> 



					<div class="col-md-6">
						<div class="form-group">
							  <font color = '#000' size = '3px' >  อัพโหลดสมุดบัญชีธนาคาร  : </font> <!--- เก็บที่อยู่--->
							 <?php
								if(!empty($img4)){
								$show_img2 = "../img/".$img4;
							?> 
							<a href="<?php echo $show_img2 ?>" target="_blank">  
							 <font color="green">(คลิก) ดูไฟล์ </font>  </a>
							<?php
								} 
							?> 
							  
						</div>
					</div> 

					<div class="col-md-6"> </div>
					</div>

				</div>  
				 
                			   
                    <?php } ?>
                    
                    
                    
                    
                    
                    
                	<br><Br><br><Br>
                </div>
              </div>
            </div> 
        </div>
        
        
   

<?php
include('footer2.php');
?>