<?php 
session_start();
   
					$_SESSION["UserID2"] = "";
					$_SESSION["Status2"] = "";
					$_SESSION["User2"] = "";
					$_SESSION["Fullname2"] = ""; 


 	echo("<script>window.location = 'index.php';</script>");
		 
	mysqli_close($objCon);
?>