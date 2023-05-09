<?php 
include("../db_config.php");

	if(empty($_SESSION["UserID3"])){
		echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index.php';</script>");
	} 
	 
	$img = ""; 
	 
 
?>
<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>
	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>  เว็บไซต์ผู้ช่วยสอน </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
</head>
<body id="main-page" style="background-color: #A9C7FF; ">

<nav class="navbar navbar-inverse">
  <div class="container">
     <div class="col-lg-12" align="right"  style="margin-top: 5px;">
     	<font color="#000" > สถานะ อาจารย์ </font>
     </div>
     
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img src="images/logo-mini.png" style="margin-top: -5px; margin-bottom: 5px;"> 
      </a>
    </div>
    
     <?php 
			$loaddata = $_SESSION["load"];
			
			if($loaddata == "1"){
				$page1 = "active";
			}else if($loaddata == "2"){
				$page2 = "active"; 
			}else if($loaddata == "3"){
				$page3 = "active"; 
			}else if($loaddata == "4"){
				$page4 = "active"; 
			}else if($loaddata == "5"){
				$page5 = "active"; 
			}else if($loaddata == "6"){
				$page6 = "active"; 
			}else if($loaddata == "7"){
				$page7 = "active"; 
			}else if($loaddata == "8"){
				$page8 = "active"; 
			}else if($loaddata == "9"){
				$page9 = "active"; 
			}else if($loaddata == "10"){
				$page10 = "active"; 
			}else if($loaddata == "11"){
				$page11 = "active"; 
			}else if($loaddata == "12"){
				$page12 = "active"; 
			}else if($loaddata == "13"){
				$page13 = "active"; 
			}else if($loaddata == "14"){
				$page14 = "active"; 
			}else if($loaddata == "15"){
				$page15 = "active"; 
			}else if($loaddata == "16"){
				$page16 = "active"; 
			}else if($loaddata == "17"){
				$page17 = "active"; 
			}
			?>
			
			
     <div class="collapse navbar-collapse" id="myNavbar">
     
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo $page1; ?>"><a href="index.php"> หน้าแรก </a></li> 
        <li class="<?php echo $page2; ?>"><a href="subject.php"> รายวิชาที่เปิดรับสมัคร </a></li>   
    
        <li class="<?php echo $page4; ?>"><a href="profile.php"> โปรไฟล์ </a></li> 
        <li class="<?php echo $page5; ?>"><a href="contact.php"> ติดต่อ </a></li> 
        <li class="<?php echo $page6; ?>"><a href="../check_out2.php"> ล็อกเอาท์ </a></li>
        <li class="icon"><a href="#"><img src="images/user.png" style="width: 25px;"></a></li>
         
      </ul>
      
       
     
    </div>
     
     <div class="col-lg-12" align="right"  style="margin-top: -5px; margin-bottom: 5px;">
     	<div style="border: 1px solid #DCDCDC; width: 140px; height: 30px; " align="center">  
     	<a href="backend/index.php">  <p style="margin-top: 2px;" >  <font color="#000" size="2px"   >  ไปควบคุมเว็บ </font></p> </a> </div>
     </div>
     
  </div>
</nav>