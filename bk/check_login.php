<?php  
session_start();
include("db_config.php");
  
			$strSQL = "SELECT * FROM member WHERE username = '".$_POST['username']."' 
			and password = '".$_POST['password']."' ";
			$objQuery = mysqli_query($objCon,$strSQL);
			$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC); 
			if(!$objResult)
			{  
					  
				 echo("<script>alert('ตรวจสอบ user และ password อีกครั้ง !!')</script>");
				 echo("<script>window.location = 'login.php';</script>");

			}
			else
			{ 
					$_SESSION["CHKStatus"] = $objResult["status"]; 

					if($_SESSION["CHKStatus"] == "M"){
						
					$_SESSION["UserID2"] = $objResult["id"];
					$_SESSION["Status2"] = $objResult["status"];
					$_SESSION["Use2r"] = $objResult["username"];
					$_SESSION["Fullname2"] = $objResult["name"];
						
					echo("<script>alert('Login Sucess  !!')</script>");
					echo("<script>window.location = 'student/index.php';</script>"); 
						
					}else if($_SESSION["CHKStatus"] == "A"){
						
					$_SESSION["UserID"] = $objResult["id"];
					$_SESSION["Status"] = $objResult["status"];
					$_SESSION["User"] = $objResult["username"];
					$_SESSION["Fullname"] = $objResult["name"];
						
						
					echo("<script>alert('Login Sucess  !!')</script>");
					echo("<script>window.location = 'adminlogin/index.php';</script>"); 
						
					}else{
						 					
					echo("<script>alert('ตรวจสอบ user และ password อีกครั้ง !!')</script>");
					echo("<script>window.location = 'login.php';</script>");
						
					}


			}
		 
	mysqli_close($objCon);
?>