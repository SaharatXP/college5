<?php
session_start();
$_SESSION["load"] = "4";
include('header.php'); 
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
		function validateForm() {
		  var x1 = document.getElementById("password").value;
		  var x2 = document.getElementById("repassword").value; 
		  var x3 = document.getElementById("username").value;  
			
		  if (x1 != x2) {
			alert(" Password และ Re-Password ไม่ตรงกัน ");
			return false;
		  }  	
		}
		</script>
		
<div id="wrapper" class="container">
  <h1 id="page-title"> ข้อมูลนักศึกษา  </h1>
  <div class="row">
     
  <div class="row">
    <div class="col-md-12"> 
      <div class="announce-item">  
      
        <?php 
		  //// โหลดข้อมูล ส่วนตัวของผู้ใช่งานนั้น ๆ
			$sql = "SELECT * FROM member Where  pk = '". $_SESSION["UserID2"] ."' ";  
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
			}
		$show_img = "";
		?>
					
	   <!--- Form บอกการบันทึกบันทึกไปที่ไหน --->
      <form role="form" name="frmMain" method="post" action="save_profile_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"   > 
                    
	  <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_SESSION["UserID2"]; ?>" >
    	  
     	  <div class="row">
    		<div class="col-md-3">
       		<font color="black" size="3px" class="serif">     </font> 
			 <br> 
			<?php
				if(empty($img)){
					$show_img2 = "../images/up.png";
				}else{ 
					$show_img2 = "../img/".$img;
				} 
			?> 
			<img id="blah" src="<?php echo $show_img2 ?>" alt="your image" width="150px;" style="height: 230px;" /> 
			 <Br>
			 <Br>
			<input type="file"  name="img" onchange="readURL(this);"  class="form-control"  />  
       	
       	  
        	</div>
    		<div class="col-md-9"> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username:</label> <!--- User เก็บ User ในการล็อกอิน --->
                    <input type="text" class="form-control" id="username" name="username" required="" value="<?php echo $username; ?>" readonly  style="border-radius: 5px;"  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username"> รหัสนักศึกษา : </label> <!--- User เก็บ User ในการล็อกอิน --->
                    <input type="text" class="form-control" id="codestudent" name="codestudent" required="" value="<?php echo $codestudent; ?>"     style="border-radius: 5px;"  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"> ชื่อ :</label> <!--- เก็บชื่อผู้ใช้งาน   --->
                    <input type="text" class="form-control" id="name" name="name" required="" value="<?php echo $name; ?>" style="border-radius: 5px;" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username"> ระดับการศึกษา : </label> <!--- User เก็บ User ในการล็อกอิน --->
                    <select class="form-control" id="subject" name="subject" required   style="border-radius: 5px;"    > 
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
						<?php 
						$sql = "SELECT * FROM drop_subject where name != '".$subject."' order by pk asc  "; 
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
                    <label for="email"> Email : </label> <!---  เก็บ EMail   --->
                    <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email; ?>"  style="border-radius: 5px;" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address"> คณะ : </label> <!--- เก็บที่อยู่--->
                    <input type="text" class="form-control" id="major3" name="major3" required="" value="<?php echo $major3; ?>"  style="border-radius: 5px;"  >
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password"> รหัสผ่าน : </label> <!---  เก็บ Password ในการล็อกอิน  --->
                    <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password; ?>"  style="border-radius: 5px;"  >
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address"> สาขา : </label> <!--- เก็บที่อยู่--->
                    <input type="text" class="form-control" id="major" name="major" required="" value="<?php echo $major; ?>"  style="border-radius: 5px;"  >
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone"> เช็ครหัสผ่าน : </label> 
                    <input type="password" class="form-control" id="repassword" name="repassword" required="" value=""  style="border-radius: 5px;"  >
                </div>
            </div>  
               <div class="col-md-6">
                <div class="form-group">
                    <label for="address"> โครงการ : </label> <!--- เก็บที่อยู่--->
                    <select class="form-control" id="major2" name="major2" required   style="border-radius: 5px;"      > 
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
						<?php 
						$sql = "SELECT * FROM drop_type where name != '".$major2."' order by pk asc  "; 
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
                    <label for="address"> เบอร์โทรศัพท์ : </label> <!--- เก็บที่อยู่--->
                    <input type="text" class="form-control" id="telphone" name="telphone" required="" value="<?php echo $telphone; ?>"  style="border-radius: 5px;"  >
                </div>
            </div> 
             
            <div class="col-md-6"> </div>
        	</div>
        	 
        </div>
        
		<div class="row">
		 
		<div class="col-md-12 " align="right">
		<div class="form-group">  
			 <button type="submit" class="btn btn-primary" style="background-color: #00008B; border-radius: 5px; width: 110px; border-color: white; "> <font color="white" size="3px" class="serif">   อัพเดต </font> </button> 
							 
			<a href="staff.php">   
			<button type="button" class="btn btn-danger"  style="background-color: #00008B; border-radius: 5px; width: 100px; border-color: white; border: 1px solid #00008B; "> <font color="white" size="3px" class="serif"> ยกเลิก  </font> </button>  
			</a> 
			
		</div>
		</div>  
		</div>
						
		</form> 
		
		<br><br><bR><br>
	</div> 
	</div>
	</div>
     
     
  </div>
</div>

<?php
include('footer.php');
?>
