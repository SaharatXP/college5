<?php
session_start();
$_SESSION["load"] = "1";
include('header.php'); 
?>
  
<div id="wrapper" class="container"> 
  <div class="row">
    <div class="col-md-12"> 

      <div class="section-title">
        ข่าวสาร 
      </div>
        
      	<div class="row" style="background-color: #FFF;">
		<div class="col-md-12" style="margin-top: 25px; margin-bottom: 25px;  " > 
     
      <!--- โหลด ข่าว  ---> 
      <?php
		$sql2 = "SELECT * FROM news_report where pk = '".$_GET["CusID"]."'  order by pk desc  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{ 
			$totalimg = 0;
			$sql4 = "SELECT * FROM images  where bill_no = '".$objResult2["bill_no"]."' order by pk asc  "; 
			$query4 = mysqli_query($objCon,$sql4);
			while($objResult4 = mysqli_fetch_array($query4))
			{  
				$totalimg++;
			} 
			
			$img = "";
			$img_all = "";
			$sql4 = "SELECT * FROM images  where bill_no = '".$objResult2["bill_no"]."' order by pk asc  "; 
			$query4 = mysqli_query($objCon,$sql4);
			while($objResult4 = mysqli_fetch_array($query4))
			{  
				
			$img = $objResult4["img"]; 
			$img_all = $img; 
			
		?>	
           
			<div class="col-md-2" style="margin-top: 20px;"> 
			<?php if(empty($img_all)){  ?>
			 
			<?php  }else{ ?>
			<a href="../adminlogin/uploads/<?php echo $img_all; ?>" target="_blank"> 
			<img src="../adminlogin/uploads/<?php echo $img_all; ?>" style="height: 120px;"    > 
			</a>
			<?php  }   ?>
			</div> 
		   
      <?php } 
			}  ?> 
      
		</div> 
		</div>
      
      
      
      
    </div>
  </div>
   
</div>

<?php
include('footer.php');
?>
