<?php  
session_start();
include('../db_config.php');
   
	$strSQL = "SELECT * FROM member WHERE username = '".($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert('Username ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'profile.php';</script>");
	}
	else
	{	
		 
		 $check_image11 = $_FILES["img"]["name"];
			$check_type = $_FILES["img"]["type"];
		
		 	if(empty($check_image11)){
						$check_image11 = "";
					}else{
						$check_image11 = "rtimg".rand(1,999)."img".rand(1,9999).".png";
						if(move_uploaded_file($_FILES["img"]["tmp_name"],"../img/".$check_image11))
						{
							 $update_img11  =  $check_image11 ;
						} 
					}

		
		$strSQL = "INSERT INTO member (
		 name, address, 
		 telphone, status, username, password, img, email, name2, codestudent ) VALUES (
		  '".$_POST["name"]."', '".$_POST["address"]."',
		
		'".$_POST["telphone"]."','".$_POST["title"]."', '".$_POST["username"]."', '".$_POST["password"]."', '".$update_img11."', '".$_POST["email"]."', '".$_POST["name2"]."', '".$_POST["codestudent"]."' 
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'profile.php';</script>");
		
	}
?>