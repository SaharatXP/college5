<?php
session_start();
$_SESSION["load"] = "2";
include('header.php'); 


$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}



?>
  
<div id="wrapper" class="container">
  <h1 id="page-title">  รายวิชาที่เปิดรับสมัคร   </h1>
  <h1 id="page-title">  ***เช็ครายละเอียดก่อนสมัคร***   </h1>
  <div class="row">
   <div class="col-md-7" align="left">
      <div class="form-group">
        <form method="get" action="subject.php" enctype="multipart/form-data" > 
                  
			<input type="hidden" name="page" id="page" class="form-control " value="" autocomplete="off"  style=" border-radius: 10px; margin-top: 10px; "    > 

			<table width="100%">
				<tr>
					<td width="35%">
					<font color="black" size="3px" class="serif">  ปีการศึกษา    </font> 
					<input type="text" name="searchname" id="searchname" class="form-control " value="<?php echo $searchname; ?>" autocomplete="off"  autofocus  style="  border-radius: 0px; width: 95%;   "  > 
					</td>
					<td width="35%">
					<font color="black" size="3px" class="serif">  ภาคการศึกษา    </font> 
					<select class="form-control" id="drop_term" name="drop_term" required style="border-radius: 0px;  width: 95%; "     >
					 	<?php if(empty($_GET["drop_term"])){   ?>
						<option value="">  ภาคการศึกษา  </option>
						<?php } ?>
					  <?php 
						$sql = "SELECT * FROM drop_term where name = '".$_GET["drop_term"]."' order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
					<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
						?>   
					  <?php 
						$sql = "SELECT * FROM drop_term where name != '".$_GET["drop_term"]."'   order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
					<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
						?>  
					 	<?php if(!empty($_GET["dropshow"])){   ?>
						<option value="">  ประกาศทั้งหมด  </option>
						<?php } ?>
				  </select>
					</td>
					<td>  
						<div style="margin-top: 23px;" >  </div>
						<button type="submit" class="btn btn-primary btn-minwidth" style="  width: 110px;   "> <font color="white" size="3px" class="serif">   ค้นหา </font>  </button> 
					</td>
				</tr>
			</table>
						  

	 </form> </div> </div>  
    <div class="col-md-12">
   <?php 
	$i = 1; 
												  
	//// โหลดข้อมูลการเพิ่ม วิชา 
	$addcoe = "";
		if(empty($_GET["drop_term"])){
			
		}else{
			$addcoe = " and data8 ='".$_GET["drop_term"]."' ";
		}
	$sql = "SELECT * FROM classdata  where data7 like '%".$searchname."%'  and (chk1 = '".$studentsubject."'  or   chk2 = '".$studentsubject."') ".$addcoe." order by pk desc ";  
	 
	$query = mysqli_query($con,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{      
								
	/// โหลดข้อมูลชื่อ อาจารย์ 
	$namedata5 = "";
	$sql4 = "SELECT * FROM member  where pk = '".$objResult["data11"]."' "; 
	$query4 = mysqli_query($objCon,$sql4);
	while($objResult4 = mysqli_fetch_array($query4))
	{  
		$namedata5 = $objResult4["name"];
	} 
								 
	?>
    
    <div class="col-xs-6 col-sm-6 col-md-4" style="border-radius: 10px;  ">
      <div class="subject-item" style="border-radius: 10px;" >
	  <div class="subject-item-title">  รหัสวิชา   <?php echo $objResult["data1"];?><br> <?php echo $objResult["data2"];?> </div>
        <div class="subject-item-title" style="margin-top: 5px;">  <?php echo $objResult["data3"];?> </div>
        <div class="subject-item-content" style="margin-top: 5px;"> อาจารย์ประจําวิชา : <?php echo $namedata5;?> </div> 
        
         <div class="row"  style="margin-top: 5px;">
         	<div class="col-lg-6" align="left" > <b>  <font size="3px" >   <?php echo $objResult["data8"];?> </font>  </b> </div>
         	<div class="col-lg-6" align="right" > <b> <font size="3px" >  ปีการศึกษา <?php echo $objResult["data7"];?></font>  </b> </div>
         </div> 
         
          <div class="row" style="margin-top: 10px; margin-bottom: 5px;">
          <?php if($objResult["chk1"] == $studentsubject){ ?> 
          	<div class="col-lg-12">
			  <a href="view_subject3.php?CusID=<?php echo $objResult["pk"]; ?>" class="btn btn-primary btn-minwidth" style="width: 100%;  margin-top: 10px; "  > สมัคร <br>
         	(ปริญญาตรี) </a>
          	</div> 
          <?php } ?>
          <?php if($objResult["chk2"] == $studentsubject){ ?>  
          	<div class="col-lg-12">
			 <a href="view_subject.php?CusID=<?php echo $objResult["pk"]; ?>" class="btn btn-primary btn-minwidth" style="width: 100%;  margin-top: 10px; "  > สมัคร <Br>
         	(ปริญญาโท-เอก) </a>
          	</div>
          <?php } ?>
          	<div class="col-lg-12"  style="margin-top: 10px; margin-bottom: 5px; display: none; "  >
			  <a href="../img/<?php echo $objResult["datafile"]; ?>" class="btn btn-primary btn-minwidth" style="width: 100%;" download > ดาวน์โหลดฟอร์มสมัครผู้ช่วยสอน </a> 
          	</div>
         <!-- <?php if($objResult["chk1"] == $studentsubject){ ?> 
				<div class="col-lg-12"  style="margin-top: 10px; margin-bottom: 5px;  "  >
				   <a href="view_subjectdetail.php?CusID=<?php echo $objResult["pk"]; ?>"class="btn btn-primary btn-minwidth" style="width: 100%;"   > รายละเอียด </a> 
				</div>
			  <?php } ?>
          <?php if($objResult["chk2"] == $studentsubject){ ?> 
          	 
				<div class="col-lg-12"  style="margin-top: 10px; margin-bottom: 5px;  "  >
				   <a href="view_subjectdetail2.php?CusID=<?php echo $objResult["pk"]; ?>"class="btn btn-primary btn-minwidth" style="width: 100%;"   > รายละเอียด </a> 
				</div>
          	     
          	 <?php } ?>  -->
          </div>
           
         <div class="row">
         	<div class="col-lg-4" align="left" > <b>  <font size="2px" >  <?php echo $objResult["data14"]; ?> </font>  </b> </div>
         	<div class="col-lg-8" align="right" > <b> <font size="2px" >  ปิดสมัครวันที่ <?php echo DateThai($objResult["enddate"])." ".Datethai2($objResult["enddate"]);?> </font>  </b> </div>
         </div> 
          
      </div>
    </div>
     
    <?php } ?>
     
  </div>
     
     
     
  </div>
</div>

<?php
include('footer.php');
?>
