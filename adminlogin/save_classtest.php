<?php
include("../db_config.php");
	
	 
	if(empty($_POST['classdata'])){
		 echo("<script>window.location = 'classtest.php?classdata=".$_POST["classdata"]."';</script>");
	}
		 
	$strSQL = "SELECT * FROM data_class WHERE data1 = '".($_POST['data1'])."' and
	data2 = '".($_POST['data2'])."' and
	data3 = '".($_POST['data3'])."' and
	iddata = '".($_POST['classdata'])."' 
	
	";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert(' ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'classtest.php?classdata=".$_POST["classdata"]."';</script>");
	}
	else
	{	
				$strSQL = "INSERT INTO data_class (data1, data2, data3, iddata, data4, data5, data6) VALUES 
				(
				'".$_POST["data1"]."','".$_POST["data2"]."',  '".$_POST["data3"]."',  '".$_POST["classdata"]."' 
				, '".$_POST["data4"]."' ,  '".$_POST["data5"]."',  '".$_POST["data6"]."'
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);		  

				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'classtest.php?classdata=".$_POST["classdata"]."';</script>");
	}
?>