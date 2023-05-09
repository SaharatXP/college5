<?php
include("../db_config.php");
	
	 
		/// รันเลขบิลรายการ สร้างไว้ เพื่อเป็น ตัวรันลำดับรายการ
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
					 
  
				$strSQL = "INSERT INTO news_report (title, detail, img, date_start, date_start2, date_time, bill_no  ) VALUES 
				('".$_POST["title"]."','".$_POST["detail"]."',  '".$update_img11."',  '".date('d-m-Y')."'
				,  '".date('Y-m-d')."',  '".date('H:i')."',  '".$bill_no."'
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);		  



				$strSQL = " Update images Set bill_no = '".$bill_no."'  " ;
				$strSQL .=" WHERE bill_no = '' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 


				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'index.php';</script>");

?>