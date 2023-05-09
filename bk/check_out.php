<?php 
	 include("db_config.php");
   
					$_SESSION["UserID"] = "";
					$_SESSION["Status"] = "";
					$_SESSION["User"] = "";
					$_SESSION["Fullname"] = ""; 


 	echo("<script>window.location = 'index.php';</script>");
		 
	mysqli_close($objCon);
?>