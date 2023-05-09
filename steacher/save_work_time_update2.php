<?php
session_start();
include('../db_config.php');
	
	  		 
				 
		if(empty($_SESSION["UserID3"])){
			 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
			 echo("<script>window.location = '../index.php';</script>");

		}else{
			 

			$check_image11 = $_FILES["newAvatar"]["name"]; 
			$update_img11 = "";
  
			if(empty($check_image11)){
				$check_image11 = "";
			}else{
				$check_image11 = "Imgsp".rand(1,999)."img".rand(110000,999999).".png";
				if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
				{
					$update_img11  =  ",img1 ='".$check_image11."'" ;
				} 
			}
			$check_image21 = $_FILES["newAvatar2"]["name"]; 
			$update_img21 = "";
  
			if(empty($check_image21)){
				$check_image21 = "";
			}else{
				$check_image21 = "Imgsptwo".rand(11,999)."img".rand(110000,999999).".png";
				if(move_uploaded_file($_FILES["newAvatar2"]["tmp_name"],"../img/".$check_image21))
				{
					$update_img21  =   ",img2 ='".$check_image21."'" ;  
				} 
			}

			
			

		$cut = explode("-",$_POST["savedata1"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
 

		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
			
			
	 	$strSQL = "Update work_time Set
				 savedata1 = '".$_POST["savedata1"]."',    
				 savedata2 = '".$_POST["savedata2"]."',    
				 savedata3 = '".$_POST["savedata3"]."',    
				 savedata4 = '".$_POST["savedata4"]."',    
				 savedata5 = '".$_POST["savedata5"]."',    
				 savedata6 = '".$_POST["savedata6"]."',    
				 savedata7 = '".$_POST["savedata7"]."',    
				 newdate = '".$daystart."',    
				 newdate2 = '".$dayend."'  ".$update_img11.$update_img21  ;
				$strSQL .=" WHERE pk = '". $_POST["pkupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
			
			
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'studentclass.php?CusID=".$_POST["CusID"]."&page=';</script>");
		
	 
		}
	 
	 
?>