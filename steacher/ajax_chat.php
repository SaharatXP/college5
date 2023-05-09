<?php  
session_start();
include("../db_config.php");
// ถ้ามี session ของคนที่กำลังใช้งานอยู่ และมีค่า id ของคนที่เป็นจะส่งไปหา และข้อความไม่ว่าง ส่งมาเพิ่มข้อมูล
if(isset($_SESSION['ses_user_id']) && $_SESSION['ses_user_id']!="" 
&& isset($_POST['user2']) && $_POST['user2']!="" 
&& isset($_POST['msg']) && $_POST['msg']!="" ){ 
	$sql="
	INSERT INTO tbl_chat SET 
	chat_msg='".$_POST['msg']."',
	chat_user1='".$_SESSION['ses_user_id']."',  
	chat_user2='".$_POST['user2']."',
	typedata='1',
	room='".$_SESSION["roomdata"]."',
	chat_datetime='".date("Y-m-d H:i:s")."'			
	";
	$mysqli->query($sql);
	exit;
}


    if ( 0 < $_FILES['file']['error'] ) {
         
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], '../img/' . $_FILES['file']['name']);
		
		if($_FILES['file']['name'] != ""){ 
			 $sql="
			INSERT INTO tbl_chat SET 
			chat_msg='".$_FILES['file']['name']."',
			chat_user1='".$_SESSION['ses_user_id']."',  
			chat_user2='".$_SESSION['ses_user_id2']."',
			typedata='2',
			room='".$_SESSION["roomdata"]."',
			chat_datetime='".date("Y-m-d H:i:s")."'			
			";
			$mysqli->query($sql);
		}
    }

// ส่งค่ามาเพื่อรับข้อมูลไปแสดง
if(isset($_POST['viewData']) && $_POST['viewData']!=""){
header("Content-type:application/json; charset=UTF-8");            
header("Cache-Control: no-store, no-cache, must-revalidate");           
header("Cache-Control: post-check=0, pre-check=0", false);     	
	if($_POST['viewData']==1){ // เงื่อนไขกรณีส่งค่ามาครั้งแรก แสดงรายการทั้งหมดที่มีอยู่ 
		// กำหนดเงื่อนไขคำสั่งแสดงรายการทั้งหมดของคู่สนทนา
		$sql="
		SELECT * FROM tbl_chat WHERE pk>'".$_POST['maxID']."' AND
		(
			(chat_user1='".$_SESSION['ses_user_id']."' AND chat_user2='".$_POST['userID']."') OR 
			(chat_user1='".$_POST['userID']."' AND chat_user2='".$_SESSION['ses_user_id']."')
		)	
		ORDER BY pk asc 
		";
		
	}else{ // แสดงทีละรายการกรณีเริ่มสนทนา
		// กำหนดเงื่อนไขแสดงรายการล่าสุดที่ละ 1 รายการที่มีการเพิ่มเข้ามาใหม่
		$sql="
		SELECT * FROM tbl_chat WHERE pk>'".$_POST['maxID']."' AND
		(
			(chat_user1='".$_SESSION['ses_user_id']."' AND chat_user2='".$_POST['userID']."') OR 
			(chat_user1='".$_POST['userID']."' AND chat_user2='".$_SESSION['ses_user_id']."')
		)	
		ORDER BY pk LIMIT 1
		";
	}
	$result = $mysqli->query($sql);
	if($result){
		while($row = $result->fetch_array()){
			$right = " message-list ";
			if($_SESSION['ses_user_id']==$row['chat_user1']){
				$right = "message-list me";
			}
			$json_data[]=array(
				"max_id"=>$row['pk'],
				"data_align"=>$right,// ถ้าเป็นข้อความที่ส่งจากผู้ใช้ขณะนั้น  
				"data_msg"=>$row['chat_msg'],		
				"data_show"=>$row['typedata']			
			);	
		}
	}
	$json =json_encode($json_data);
	echo $json;// ส่งค่ากลับเป็น json object
	exit;
}