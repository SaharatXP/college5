<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="signup-page">

<div id="signup-wrapper">
    <form id="signup-form" method="post" action="save_register.php"  >
        <div class="text-center">
            <img src="images/logo.png" style="width:300px;">
        </div>
        <h1 id="page-title">Sign Up</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" minlength="10" maxlength="10" required="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required="">
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-6" align="center" > 
						    <button type="submit" class="btn col-lg-12 "  style="background-color: #0F75BC; border-radius: 12px;   margin-top: 10px; border-radius: 10px; "> 
						    <font size="4px" color="#FFFFFF" > Submit </font> </button>
						     
					</div>
            <div class="col-lg-6" align="center" > 
						    <a href="index.php">  
						    <button type="button" class="btn col-lg-12 "  style="background-color: #FFFFFF; border-radius: 12px; margin-top: 10px; border-radius: 10px; border: 1px solid #0F75BC; "> 
						    <font size="4px" color="black" > Login </font> </button> </a>
						      
					</div>
        </div>
    </form>
</div>

</body>
</html>

