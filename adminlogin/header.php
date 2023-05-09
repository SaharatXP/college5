<?php 
include("../db_config.php");

	if(empty($_SESSION["UserID"])){
		//echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index.php';</script>");
	} 
	 
ini_set("memory_limit","10M");
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo3.ico" type="image/ico" />

    <title> เว็บไซต์ผู้ช่วยสอน </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
 
    <link href="build/css/custom.min.css" rel="stylesheet">
    
    
	
	<link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui-timepicker-addon.css" />
        
        <script type="text/javascript" src="jquerydatepicker/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-sliderAccess.js"></script>
        
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	


	
        
  </head>
  
 <style>
@font-face {
  font-family: SukhumvitSet-Medium;
  src: url('../fonts/SukhumvitSet-Medium.ttf'); 
}

@font-face {
  font-family: SukhumvitSet-SemiBold;
  src: url('../fonts/SukhumvitSet-SemiBold.ttf'); 
} 
	 
.serif {
  font-family:  SukhumvitSet-Medium, serif;
} 
.serif2 {
  font-family:  SukhumvitSet-SemiBold, serif;
}

</style>
 
  <body class="nav-md serif " style="background-color: #0F75BD;">
    <div class="container body"    style="background-color: #0F75BD;">
      <div class="main_container"   style="background-color: #0F75BD;" >
        <div class="col-md-3 left_col"   style="background-color: #0F75BD;"  >
          <div class="left_col scroll-view" style="background-color: #0F75BD;"> 
           
            <div class="navbar nav_title"  style="background-color: #0F75BD; height: 130px; margin-top: 5px; " align="center">
              <a href="index.php" class="site_title" style="  height: 100%;" >
              <img src="../images/logo.png" width="100%" style="  margin-left: -10px; margin-top: 10px;  ">
              <br> 
              <font color="#FFF" size="3px"> เว็บไซต์ผู้ช่วยสอน </font>
              </a>
            </div>

            <div class="clearfix"></div>
 			<hr style="border: 1px solid white; width: 80%; ">
            <br />
			<?php 
			$loaddata = $_SESSION["load"];
				$page1 = "#FFF";
				$page2 = "#FFF";
				$page3 = "#FFF";
				$page4 = "#FFF";
				$page5 = "#FFF";
				$page6 = "#FFF";
				$page7 = "#FFF";
				$page8 = "#FFF";
				$page9 = "#FFF";
				$page10 = "#FFF";
				$page11 = "#FFF";
				$page12 = "#FFF";
				$page13 = "#FFF";
				$page14 = "#FFF";
			
			
				$page1bg = " ";
				$page2bg = " ";
				$page3bg = " ";
				$page4bg = " ";
				$page5bg = " ";
				$page6bg = " ";
				$page7bg = " ";
				$page8bg = " ";
				$page9bg = " ";
				$page10bg = " ";
				$page11bg = " ";
				$page12bg = " ";
				$page13bg = " ";
				$page14bg = " ";
			
			if($loaddata == "1"){
				$page1 = "#000";
				$page1bg = "#FFF";
			}else if($loaddata == "2"){
				$page2 = "#000";
				$page2bg = "#FFF";
			}else if($loaddata == "3"){
				$page3 = "#000";
				$page3bg = "#FFF";
			}else if($loaddata == "4"){
				$page4 = "#000"; 
				$page4bg = "#FFF";
			}else if($loaddata == "5"){
				$page5 = "#000"; 
				$page5bg = "#FFF";
			}else if($loaddata == "6"){
				$page6 = "#000";
				$page6bg = "#FFF"; 
			}else if($loaddata == "7"){
				$page7 = "#000";
				$page7bg = "#FFF";
			}else if($loaddata == "8"){
				$page8 = "#000";
				$page8bg = "#FFF";
			}else if($loaddata == "9"){
				$page9 = "#000";
				$page9bg = "#FFF";
			}else if($loaddata == "10"){
				$page10 = "#000";
				$page10bg = "#FFF";
			}else if($loaddata == "11"){
				$page11 = "#000";
				$page11bg = "#FFF";
			}else if($loaddata == "12"){
				$page12 = "#000";
				$page12bg = "#FFF";
			}else if($loaddata == "13"){
				$page13 = "#000";
				$page13bg = "#FFF";
			}else if($loaddata == "14"){
				$page14 = "#000";
				$page14bg = "#FFF";
			}
			?>
           
           
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print  ">
              <div class="menu_section">
                	<h3><font size="2px"> เมนู </font></h3>
                	
                	<?php if($_SESSION["Status"] == "A"){ ?>
                	<ul class="nav side-menu">
                  	<li  style="background-color: <?php echo $page1bg; ?>; " ><a href="index.php"><i class="fa fa-home"></i><font size="2px"  color="<?php echo $page1; ?>"> จัดการข่าวสาร </font> </a> </li> 
                  	 
                  	<li  style="background-color: <?php echo $page2bg; ?>; " ><a href="news.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page2; ?>"> จัดการประกาศ </font> </a> </li> 
                  	
                  	<li style="background-color: <?php echo $page3bg; ?>; " ><a href="dataclass2.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page3; ?>"> จัดการรายวิชา </font> </a> </li> 
                  	
                  	<li  style="background-color: <?php echo $page10bg; ?>; " ><a href="classtest.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page10; ?>"> จัดการตารางสอน </font> </a> </li> 
                 	  
                 	   
                  	  
                  	<li  style="background-color: <?php echo $page5bg; ?>; "><a href="checkdata.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page5; ?>"> ตรวจสอบสถานะการสมัคร </font> </a> </li> 
                  	 
                  	
                  	<li  style="background-color: <?php echo $page6bg; ?>; "><a href="checkdata2.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page6; ?>"> จัดการสถานะการสมัคร </font> </a> </li>  
                  	
                  	<li  style="background-color: <?php echo $page7bg; ?>; "><a href="studentclass.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page7; ?>"> ตรวจสอบการทำงานของผู้ช่วยอาจารย์ </font> </a> </li>  
                  	
                  	<li  style="background-color: <?php echo $page12bg; ?>; "><a href="checkdata3.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page12; ?>"> ตรวจสอบข้อมูลนักศึกษาและผู้ช่วยอาจารย์ </font> </a> </li> 
                  	  
                  	   
                  	
                  	<li  style="background-color: <?php echo $page9bg; ?>; "><a href="profile2.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page9; ?>"> จัดการข้อมูลผู้ใช้งาน </font> </a> </li>  
					 
                    
                    <li><a href="../check_out.php"><i class="fa fa-sign-out"></i><font size="2px"  color="<?php echo $page11; ?>" > ออกจากระบบ </font> </a> </li>  
                </ul>
                	<?php }else if($_SESSION["Status"] == "AJ"){ ?>
                	<ul class="nav side-menu">
                  	<li style="background-color: <?php echo $page1bg; ?>; "><a href="index.php"><i class="fa fa-home"></i><font size="2px"  color="<?php echo $page1; ?>"> จัดการข่าวสาร </font> </a> </li> 
                  	 
                  	<li style="background-color: <?php echo $page2bg; ?>; "><a href="news.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page2; ?>"> จัดการประกาศ </font> </a> </li> 
                  	
                  	<li style="background-color: <?php echo $page3bg; ?>; " ><a href="dataclass2.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page3; ?>"> จัดการรายวิชา </font> </a> </li> 
                  	
                  	<li style="background-color: <?php echo $page10bg; ?>; "><a href="classtest.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page10; ?>"> จัดการตารางสอน </font> </a> </li> 
                 	   
                  	<li style="background-color: <?php echo $page5bg; ?>; "><a href="checkdata.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page5; ?>"> ตรวจสอบสถานะการสมัคร </font> </a> </li> 
                  	 
                  	
                  	<li style="background-color: <?php echo $page6bg; ?>; "><a href="checkdata2.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page6; ?>"> จัดการสถานะการสมัคร </font> </a> </li>  
                  	
                  	<li style="background-color: <?php echo $page7bg; ?>; "><a href="studentclass.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page7; ?>"> ตรวจสอบการทำงานของผู้ช่วยสอนอาจารย์ </font> </a> </li>  
                  	
                  	<li style="background-color: <?php echo $page12bg; ?>; "><a href="checkdata3.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page12; ?>"> ตรวจสอบข้อมูลนักศึกษาและผู้ช่วยอาจารย์ </font> </a> </li> 
                  	  
                  	   
                  	 
					 
                    
                    <li style="background-color: <?php echo $page11bg; ?>; "><a href="../teacher/index.php"><i class="fa fa-sign-out"></i><font size="2px"  color="<?php echo $page11; ?>" >
                    <b>  สลับไปหน้าเว็บไซต์   </b> </font> </a> </li>  
                	</ul>
                	<?php }else if($_SESSION["Status"] == "SAJ"){ ?>
                	<ul class="nav side-menu">
                  	 
                  	 
                  	<li style="background-color: <?php echo $page3bg; ?>; " ><a href="dataclass2.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page3; ?>"> จัดการรายวิชา </font> </a> </li> 
                  	
                  	<li style="background-color: <?php echo $page10bg; ?>; "><a href="classtest.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page10; ?>"> จัดการตารางสอน </font> </a> </li> 
                 	   
                  	<li style="background-color: <?php echo $page12bg; ?>; "><a href="checkdata3.php"><i class="fa fa-archive"></i><font size="2px"  color="<?php echo $page12; ?>"> ตรวจสอบข้อมูลนักศึกษาและผู้ช่วยอาจารย์ </font> </a> </li> 
                  	  
                  	   
                  	  
					 
                    
                    <li style="background-color: <?php echo $page11bg; ?>; "><a href="../steacher/index.php"><i class="fa fa-sign-out"></i><font size="2px"  color="<?php echo $page11; ?>" > <b>  สลับไปหน้าเว็บไซต์   </b> </font> </a> </li>  
                	</ul>
                	<?php } ?>
                
                
                
              </div>
                
            </div>
            <!-- /sidebar menu -->

           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu"  style="background-color: #0F75BD;">
              <div class="nav toggle" >
                <a id="menu_toggle"> <font color="white">  <i class="fa fa-bars"></i> </font> </a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                   <?php
						if(empty($img)){
							$show_img2 = "images/user.png";
						}else{ 
							$show_img2 = "staff/".$img;
						}
					?> 
                   
                    <img src="<?php echo $show_img2; ?>" alt=""> <font color="white" size="3px">  &nbsp; 
                    <?php if($_SESSION["Status"] == "A"){ ?> สถานะ : แอดมิน 
                    <?php }else if($_SESSION["Status"] == "AJ"){ ?> สถานะ : อาจารย์
                    <?php }else if($_SESSION["Status"] == "SAJ"){ ?> สถานะ : ผู้ช่วยอาจารย์
                    <?php }else{ ?>
                    สถานะ : อาจารย์ 
                    <?php } ?> </font>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> 
                    <font size="2px" color="blue">   <?php echo $_SESSION["Fullname"]; ?>   </font> </a>  
                    <a class="dropdown-item"  href="edit_profile.php"><font size="2px" color="blue"> แก้ไขข้อมูลส่วนตัว </font></a>  
                    <a class="dropdown-item"  href="../check_out.php"><i class="fa fa-sign-out pull-right"></i><font size="2px" color="blue"> ออกจากระบบ </font></a>
                  </div>
                </li> 
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

	   <style> 
						@media only screen and (max-width: 767px){
							.tablemobile{
								width: 1280px;
							}
						} 
						</style>
      
      
      	 