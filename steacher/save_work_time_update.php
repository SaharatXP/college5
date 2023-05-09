<?php
session_start();
include('../db_config.php');
	
	  		 
				 
		if(empty($_SESSION["UserID3"])){
			 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
			 echo("<script>window.location = '../index.php';</script>");

		}else{
			 


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
				 newdate2 = '".$dayend."',
				section = $_POST[section]";
				$strSQL .=" WHERE pk = '". $_POST["pkupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
			
			
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'work_time.php?CusID=".$_POST["CusID"]."&page=';</script>");
		
	 
		}
	 
	 
?>