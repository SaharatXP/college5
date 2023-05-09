<?php 
session_start();
   
					$_SESSION["UserID3"] = "";
					$_SESSION["Status3"] = "";
					$_SESSION["User3"] = "";
					$_SESSION["Fullname3"] = ""; 


 	echo("<script>window.location = 'index.php';</script>");
		 
	mysqli_close($objCon);
?>