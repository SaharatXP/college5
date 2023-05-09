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
				 echo("<script>window.location = 'index.php';</script>");

			}
			else
			{ 
					$_SESSION["CHKStatus"] = $objResult["status"]; 

					if($_SESSION["CHKStatus"] == "M"){
						
					$_SESSION["UserID2"] = $objResult["pk"];
					$_SESSION["Status2"] = $objResult["status"];
					$_SESSION["User2"] = $objResult["username"];
					$_SESSION["Fullname2"] = $objResult["name"];
					$_SESSION["subject"] = $objResult["subject"];
						
					echo("<script>alert('Login Sucess  !!')</script>");
					echo("<script>window.location = 'student/index.php';</script>"); 
						
					}else if($_SESSION["CHKStatus"] == "AJ"){
						
					$_SESSION["UserID3"] = $objResult["pk"];
					$_SESSION["Status3"] = $objResult["status"];
					$_SESSION["User3"] = $objResult["username"];
					$_SESSION["Fullname3"] = $objResult["name"];
					$_SESSION["subject"] = $objResult["subject"];
						
					echo("<script>alert('Login Sucess  !!')</script>");
					echo("<script>window.location = 'teacher/index.php';</script>"); 
					 
					}else if($_SESSION["CHKStatus"] == "SAJ"){
						
					$_SESSION["UserID3"] = $objResult["pk"];
					$_SESSION["Status3"] = $objResult["status"];
					$_SESSION["User3"] = $objResult["username"];
					$_SESSION["Fullname3"] = $objResult["name"];
					$_SESSION["subject"] = $objResult["subject"];
						
					echo("<script>alert('Login Sucess  !!')</script>");
					echo("<script>window.location = 'steacher/index.php';</script>"); 
					 
						
					}else{
						 					
					echo("<script>alert('ตรวจสอบ user และ password อีกครั้ง  !!')</script>");
					echo("<script>window.location = 'index.php';</script>");
						
					}


			}
		 
	mysqli_close($objCon);
?>