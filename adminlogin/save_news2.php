<?php
include("../db_config.php");
	



				$bill_no = ""; 
				$sql2 = "SELECT count(pk) as total FROM run_bill  ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$total = $objResult2["total"] + 1; 
					$bill_no =  "N-".$total; 
				} 

				$strSQL = "INSERT INTO run_bill (bill_no) VALUES  ('".$bill_no."')";  
				$objQuery = mysqli_query($objCon, $strSQL);

 
					$update_img11 = "";
					$update_img21 = $_FILES["img2"]["name"];
					if(empty($update_img21)){
						$update_img21 = "";
					}else{
						$update_img21 = "FF".rand(1,9999).$_FILES["img2"]["name"];
						if(move_uploaded_file($_FILES["img2"]["tmp_name"],"../img/".$update_img21))
						{

						}

					}

 
				$strSQL = "INSERT INTO news_report2 (title, detail, img, datafile, date_start, date_start2, date_time, bill_no, subject, createby, datestart, headdata  ) VALUES 
				(
				'".$_POST["title"]."','".$_POST["detail"]."',  '".$update_img11."',  '".$update_img21."',  '".date('d-m-Y')."'
				,  '".date('Y-m-d')."',  '".date('H:i')."',  '".$bill_no."','".$_POST["subject"]."','".$_POST["createby"]."','".$_POST["datestart"]."','".$_POST["headdata"]."'
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);		  
 



				$strSQL = " Update images2 Set bill_no = '".$bill_no."'  " ;
				$strSQL .=" WHERE bill_no = '' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 



				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				  echo("<script>window.location = 'news.php';</script>");

?>