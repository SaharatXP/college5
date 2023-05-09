<?php 
session_start();
$_SESSION["load"] = "0";
include('header.php');
 
 		 $name = "";
		 $title = "";
		 $detail = ""; 
		 
 

		$searchname = "";
		if(empty($_GET["searchname"])){
			
		}else{
			$searchname = $_GET["searchname"];
		}
		
		 

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


?> 
     
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                 
                 
                   <?php if(empty($_GET["page"])){ ?> 
                			  
                			  
                	<form role="form" name="frmMain" method="post" action="save_profile_update.php" enctype="multipart/form-data" >  
                       
					<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_SESSION["UserID"]; ?>" >
					
					
					<div class="row">
					
					<div class="col-lg-8 ">
					<div class="form-group"> 
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> ชื่อ-นามสกุล  </font> 
					<input type="text" name="name" id="name" class="form-control " value="<?php echo $name; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> สถานที่ติดต่อ  </font> 
					<input type="text" name="address" id="address" class="form-control " value="<?php echo $address; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> อีเมล์  </font> 
					<input type="email" name="email" id="email" class="form-control " value="<?php echo $email; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 
					</div>
					</div> 
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> สถานะ  </font> 
					<input type="text" name="status" id="status" class="form-control " value="เจ้าหน้าที่" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " readonly    > 
					</div>
					</div> 
					</div>
					
					
					<div class="row">
					<div class="col-lg-6 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> เบอร์โทรศัพท์  </font> 
					<input type="text" name="telphone" id="telphone" class="form-control " value="<?php echo $telphone; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " maxlength="10"    > 
					</div>
					</div>  
					</div>
					 
					 
					<div class="row">
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> username  </font> 
					<input type="text" name="username" id="username" class="form-control " value="<?php echo $username; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " required readonly    > 
					</div>
					</div> 
					<div class="col-lg-4 ">
					<div class="form-group"> <br> 
					<font color="black" size="3px" class="serif"> password </font> 
					<input type="text" name="password" id="password" class="form-control " value="<?php echo $password; ?>" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; " required    > 
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
						 <button type="submit" class="btn btn-primary" style="background-color: #A9C7FF; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   เพิ่มข้อมูล </font> </button> 
						 
						 <button type="reset" class="btn btn-danger"  style="background-color: #FFFFFF; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #A9C7FF; "> <font color="black" size="3px" class="serif"> ยกเลิก  </font> </button>  
						</div> 
					</div>
					</div>  
					</div> 
					 
					</form> 
					 
                	<br><Br><br><Br>
                    <?php } ?>
                    
                    
                </div>
              </div>
            </div> 
        </div>
        
        
   

<?php
include('footer.php');
?>