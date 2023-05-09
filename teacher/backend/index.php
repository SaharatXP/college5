<?php   
session_start(); 
  
		  
						
					$_SESSION["UserID"] = $_SESSION["UserID3"];
					$_SESSION["Status"] = $_SESSION["Status3"];
					$_SESSION["User"] = $_SESSION["User3"];
					$_SESSION["Fullname"] = $_SESSION["Fullname3"];
						
					/// echo("<script>alert('Login Sucess  !!')</script>");
					echo("<script>window.location = '../../adminlogin/index.php';</script>"); 
					 
						 
?>