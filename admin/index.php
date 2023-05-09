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
<body id="login-page">

<div id="login-wrapper">
   <div class="row">
   	<div class="col-lg-10"> 
    <form id="login-form" action="check_login.php" method="post"> 
        <div class="text-center">
            <img src="images/logo.png" style="width:300px;">
        </div>
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
            
            <div class="col-lg-6" align="center" > 
						    <button type="submit" class="btn col-lg-12 "  style="background-color: #0F75BC; border-radius: 12px;   margin-top: 10px; border-radius: 10px; "> 
						    <font size="4px" color="#FFFFFF" > Login </font> </button>
						     
					</div>
            <div class="col-lg-6" align="center" > 
						    <a href="index.php">  
						    <button type="button" class="btn col-lg-12 "  style="background-color: #FFFFFF; border-radius: 12px; margin-top: 10px; border-radius: 10px; border: 1px solid #0F75BC; "> 
						    <font size="4px" color="black" > cancel </font> </button> </a>
						      
					</div>
       
        </div> 
        
         
    </form>
</div>
</div>
</div>

</body>
</html>
 