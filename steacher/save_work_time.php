<meta charset="utf-8">
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
			
			
		$strSQL = "INSERT INTO work_time 
		( member, student_paper, subject, 
		savedata1, savedata2, savedata3, savedata4,
		savedata5, savedata6, savedata7, 
		create_date, create_date2, create_time, newdate, newdate2  ,section) 
		VALUES ( 
		'".$_SESSION["UserID3"]."', '".$_POST["CusID"]."',  '".$_POST["subject"]."',     
		'".$_POST["savedata1"]."', '".$_POST["savedata2"]."',  '".$_POST["savedata3"]."',     
		'".$_POST["savedata4"]."', '".$_POST["savedata5"]."',  '".$_POST["savedata6"]."',     
		'".$_POST["savedata7"]."', 
		
		'".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."',  
		'".$daystart."', '".$dayend."' , $_POST[section]  
		)"; 

		if ($objCon->query($strSQL) === TRUE) {

			echo("<script>window.location = 'work_time.php?CusID=".$_POST["CusID"]."&page=';</script>");
        } else {
            echo "Error: " . $strSQL . "<br>" . $objCon->error;
        }
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		
		
	 
		}
	 
?>