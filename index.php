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

<div id="login-wrapper"    >
   <div class="row">
   	<div class="col-lg-10"> 
    <form id="login-form" action="check_login.php" method="post">  <!--- Action =  ไปยังไฟล์ที่ทำการเช็ค  --->
        <div class="text-center">
            <img src="images/logo.png" style="width:300px;">
        </div>
        <br> 
        <h1 id="page-title">Sign in</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="username">Username:</label>  <!--- Username สมัครสมาชิก --->
                    <input type="text" class="form-control" id="username" name="username" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="password">Password:</label>  <!--- Password สมัครสมาชิก --->
                    <input type="password" class="form-control" id="password" name="password" required="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="#" class="forget-password-link">Forget password ?</a>
                </div>
            </div>
        </div>
         
        <div class="row"> 
            
            <div class="col-lg-12" align="center" > 
						    <button type="submit" class="btn btn-sm "  style="background-color: #0F75BC; border-radius: 12px;   margin-top: 10px; border-radius: 10px; width: 150px;  "> 
						    <font size="4px" color="#FFFFFF" > Login </font> </button>
						    
						    
						    <a href="register.php">  
						    <button type="button" class="btn btn-sm "  style="background-color: #FFFFFF; border-radius: 12px; margin-top: 10px; border-radius: 10px; border: 1px solid #0F75BC; width: 150px; margin-left: 5px; "> 
						    <font size="4px" color="black" > sign up </font> </button> </a> 
					</div> 
        </div> 
    </form>	
    
    
    </div>
   </div>
</div>

</body>
</html>

<script>
		function validateForm() { 
			var checkuser =  document.getElementById("username").value; 
			<?php
			$intRows = 0;
			$strSQL = "SELECT * FROM member order by id asc ";
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
