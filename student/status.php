<?php
session_start();
$_SESSION["load"] = "3";
include('header.php'); 
?>
  
<div id="wrapper" class="container">
  <h1 id="page-title"> ตรวจสอบสถานะของการสมัครเป็นผู้ช่วยอาจารย์  </h1>
  <div class="row">
     
  <div class="row">
    <div class="col-md-12"> 
      <div class="announce-item">  
     
     	<div class="table-responsive" style="margin-top: 15px;" >  	
		<table class="table table-bordered tablemobile" >
		<thead>
		<tr>
			<th width="4%" bgcolor="#FFF"><div align="center"> 
			<font size="2px" color="white" color="black"> ลำดับ </font></div></th>
			<th width="5%" bgcolor="#FFF"><div align="center"> 
			<font size="2px" color="white"> รหัสวิชา </font></div></th>  
			<th width="5%" bgcolor="#FFF"><div align="center"> 
			<font size="2px" color="white"> ชื่อวิชา </font></div></th> 
			<th width="5%" bgcolor="#FFF"><div align="center"> 
			<font size="2px" color="white"> ภาคการศึกษา </font></div></th> 
			<th width="5%" bgcolor="#FFF"><div align="center">
			<font size="2px" color="white"> กลุ่มที่สมัคร </font></div></th>   
			<th width="8%" bgcolor="#FFF"><div align="center">
			<font size="2px" color="white"> วันที่สมัคร </font></div></th>  
			<th width="5%" bgcolor="#FFF"><div align="center">
			<font size="2px" color="white"> สถานะ </font></div></th>  
			<th width="5%" bgcolor="#FFF"><div align="center">
			<font size="2px" color="white"> หมายเหตุ </font></div></th>  
		</tr>
		</thead>
			<?php 
				$i = 1;
				 
				$sql = "SELECT * FROM student_paper where student != '' and student = '".$_SESSION["UserID2"]."'  order by pk desc ";   
				$query = mysqli_query($con,$sql); 
				while($objResult = mysqli_fetch_array($query))
				{ 
					$secg = $objResult["section_group"]; 
					$name_user = "-";
					$sql2 = "SELECT * FROM member Where  pk = '". $objResult["student"]."' ";   
					$query2 = mysqli_query($objCon,$sql2); 
					while($objResult2 = mysqli_fetch_array($query2))
					{
						$name_user = $objResult2["name"]; 
						
					}	
					
					
					$sql2 = "SELECT * FROM classdata Where  pk = '". $objResult["subject"] ."' ";  
					$query2 = mysqli_query($objCon,$sql2); 
					while($objResult2 = mysqli_fetch_array($query2))
					{ 
							$data1 = $objResult2["data1"];   
							$data2 = $objResult2["data2"];   
							$data3 = $objResult2["data3"];   
							$data4 = $objResult2["data4"];   
							$data5 = $objResult2["data5"];   
							$data6 = $objResult2["data6"];   
							$data7 = $objResult2["data7"];   
							$data8 = $objResult2["data8"];   
							$data9 = $objResult2["data9"];   
							$data10 = $objResult2["data10"];   
							$datafile = $objResult2["datafile"];  
							$data11 = $objResult2["data11"];  
							$data12 = $objResult2["data12"];  
							$data13 = $objResult2["data13"];  
							$data14 = $objResult2["data14"];  
							$data15 = $objResult2["data15"];  
							$data16 = $objResult2["data16"];  
							$chk1 = $objResult2["chk1"];  
							$chk2 = $objResult2["chk2"];  
							$startdate = $objResult2["startdate"];  
							$enddate = $objResult2["enddate"];  
							$data42 = $objResult2["data42"];  
							$data32 = $objResult2["data32"]; 
							
				 
					} 
				  

						/// โหลดข้อมูล   
						$nameteacher = "";
						$sql2 = "SELECT * FROM member where status = 'AJ' and pk = '".$data11."'  order by pk asc  "; 
						$query2 = mysqli_query($objCon,$sql2);
						while($objResult2 = mysqli_fetch_array($query2))
						{ 
						  $nameteacher = $objResult2["name"];
						} 
						$namedrop_term = "";
						$sql2 = "SELECT * FROM drop_term where  name = '".$data8."'  order by pk asc  ";  
						$query2 = mysqli_query($objCon,$sql2);
						while($objResult2 = mysqli_fetch_array($query2))
						{ 
						  $namedrop_term = $objResult2["name"];
						}
			?>				 
			<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';"> 
			<td><div align="center"><font size="3px" class="serif2"><?php echo $i;?></font></div></td> 
			<td><div align="center"><font size="3px" class="serif2"><?php echo $data1;?></font></div></td>  				 
			<td><div align="center"><font size="3px" class="serif2"><?php echo $data2;?></font></div></td>  				 
			<td><div align="center"><font size="3px" class="serif2"><?php echo $namedrop_term;?></font></div></td>  				 
			<td><div align="center"><font size="3px" class="serif2"><?php echo substr($secg, 0, -1);?></font></div></td>  				 
			<td><div align="center"><font size="3px" class="serif2"><?php echo DateThai($objResult["create_date"])." ".DateThai2($objResult["create_date"]);?></font></div></td>  				 
							 
			<td><div align="center"><font size="2px" color="Black">  
						<?php 
								 
							if($objResult["status"] == "0"){
								echo " <font color = '#FF8C00' > กำลังตรวจสอบ </fonnt> "; 
							}else if($objResult["status"] == "1"){ 
								echo " <font color = '#006400' > อนุมัติ </fonnt> "; 
							}else if($objResult["status"] == "2"){ 
								echo " <font color = 'red' > ไม่อนุมัติ </fonnt> "; 
								
							}
							?>
						</font></div></td>  			 
			<td><div align="center"><font size="3px" class="serif2"><?php echo $objResult["note_data"];?></font></div></td>  
							 
					
			</tr>		 
			<?php $i++; } ?>					 
		</table> 
		</div>
		
		
		<br><br><bR><br>
	</div> 
	</div>
	</div>
     
     
  </div>
</div>

<?php
include('footer.php');
?>
