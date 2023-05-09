<?php
include('db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> เว็บไซต์ผู้ช่วยสอน </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="login-page"   style=" background-image: url('bg.jpg');  background-repeat: no-repeat; background-attachment: fixed; background-size: cover;"  >



<script>
		function validateForm() {
		  var x1 = document.getElementById("password").value;
		  var x2 = document.getElementById("repassword").value; 
		  var x3 = document.getElementById("username").value;  
			
		  if (x1 != x2) {
			alert(" Password และ Re-Password ไม่ตรงกัน ");
			return false;
		  } 
			 
			var checkuser =  document.getElementById("username").value; 
			<?php
			$intRows = 0;
			$strSQL = "SELECT * FROM member_all order by pk asc ";
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
		
		
<div  >
   <div class="row">
   	<div class="col-lg-10" align="left" style="border: 0px solid black; "> 
    <form id="signup-form" method="post" action="save_register.php"  enctype="multipart/form-data" onsubmit="return validateForm()"   >
   		<div class="row">
        <div class="col-lg-12" align="center">
            <img src="images/logo.png" style="width:300px;">
        </div>
        <div class="col-lg-12" align="center">
        <br> <font size="5px">Sign Up</font> <br> <br>
        </div>
        <div class="row"> 
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> Username : </label>
                    <input type="text" class="form-control" id="username" name="username" required="" autocomplete="off" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"> รหัสนักศึกษา : </label>
                    <input type="text" class="form-control" id="codestudent" name="codestudent" required="" autocomplete="off" >
                </div>
            </div>
             
             
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> ชื่อ : </label>
                    <input type="text" class="form-control" id="name" name="name" required="" autocomplete="off"  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"> ระดับการศึกษา : </label> 
                    <select class="form-control" id="subject" name="subject" required      >
					 <option value="">  ระดับการศึกษา </option>
					  <?php 
						$sql = "SELECT * FROM drop_subject order by pk asc  "; 
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
            
             
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> อีเมลล์ : </label>
                    <input type="email" class="form-control" id="email" name="email" required="" autocomplete="off" >
                </div>
            </div>
            
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> คณะ : </label>
                    <input type="text" class="form-control" id="major" name="major" required="" autocomplete="off" >
                </div>
            </div>
            
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> สาขา : </label>
                    <input type="text" class="form-control" id="major2" name="major2" required="" autocomplete="off" >
                </div>
            </div>
            
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> รหัสผ่าน : </label>
                    <input type="password" class="form-control" id="password" name="password" required="" autocomplete="off" >
                </div>
            </div>
            <div class="col-md-12"> 
            </div>
             
            
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> เช็ครหัสผ่าน : </label>
                    <input type="password" class="form-control" id="repassword" name="repassword" required="" autocomplete="off" >
                </div>
            </div>
             
              
               
            
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> เบอร์โทรศัพท์ : </label>
                    <input type="text" class="form-control" id="telphone" name="telphone" required=""   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10"   autocomplete="off" >
                </div>
            </div>
             
              
              
            
            <div class="col-md-6" align="left">
                <div class="form-group">
                    <label for="username"> โครงการ : </label> 
                    <select class="form-control" id="major2" name="major2" required      >
					 <option value="">  โครงการ </option>
					  <?php 
						$sql = "SELECT * FROM drop_type order by pk asc  "; 
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
              
              
              
               
        </div>
        <div class="row"> 
            <div class="col-lg-12" align="left" > 
						    <button type="submit" class="btn col-lg-12 "  style="background-color: #0F75BC; border-radius: 12px;   margin-top: 10px; border-radius: 10px; width: 150px;  "> 
						    <font size="4px" color="#FFFFFF" > Sign Up  </font> </button>
						     
						    
						     <a href="index.php">  
						    <button type="button" class="btn col-lg-12 "  style="background-color: #FFFFFF; border-radius: 12px; margin-top: 10px; border-radius: 10px; border: 1px solid #0F75BC; width: 150px; margin-left: 5px; "> 
						    <font size="4px" color="black" > Login </font> </button> </a>
					</div> 
        </div>
    	</div>
    </form>
    </div>
   </div>
</div>

</body>
</html>

