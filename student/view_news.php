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
       
       
        <style>
		.mySlides {display:none;}
		</style>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
     <!--- โหลดข่าวสาร --->
      <?php
		$sql2 = "SELECT * FROM news_report where pk = '".$_GET["CusID"]."'  order by pk desc  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
			
			$bill_no = $objResult2["bill_no"];
			$img = "";
			$img_all = ""; 
			
			$totalimg = 0;
			$sql4 = "SELECT * FROM images  where bill_no = '".$objResult2["bill_no"]."' order by pk asc  "; 
			$query4 = mysqli_query($objCon,$sql4);
			while($objResult4 = mysqli_fetch_array($query4))
			{  
				$totalimg++;
			} 
			
		?>	
        
      <div  >
 			<b>  <?php echo $objResult2["title"]; ?>  </b>
        <br>
        <?php echo datethai($objResult2["date_start"])." ".datethai2($objResult2["date_start"]); ?>
        <Br><Br>
      </div>
      
      <!--- โหลด รูปภาพ  --->
      	<div class="row" style="background-color: #FFF;">
		<div class="col-lg-12" style="margin-top: 25px; margin-bottom: 25px;  " >  
 
			<div class=" w3-display-container">
			<?php
			$next = 1;
			$img_all = "";
			$sql4 = "SELECT * FROM images  where bill_no = '".$bill_no."' order by pk asc  ";  
			$query4 = mysqli_query($objCon,$sql4);
			while($objResult4 = mysqli_fetch_array($query4))
			{  
				$img = $objResult4["img"];
				$img_all = $img;  
			?> 
			<a data-toggle="modal" data-target="#smallmodal<?php echo $objResult4["pk"]; ?>" data-id="<?php echo $objResult4["pk"]; ?>" style="cursor: pointer;"  >   
  			<img class="mySlides" src="../adminlogin/uploads/<?php echo $img_all; ?>" style="width:100%; height: 570px;">  </a>
  			
  			   <!-- modal small -->
							<div class="modal fade" id="smallmodal<?php echo $objResult4["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> 
										<font size="3px" color="black">  <?php echo $objResult4["pk"]; ?> </font> </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										
										<font size="3px" color="black">   
										<div class="row">
											<div class="col-lg-12">
												<div class="col-lg-12">
													<?php
													if(empty($img_all)){
														$show_img2 = "../images/bg.png";
													}else{ 
														$show_img2 = "../adminlogin/uploads/".$img_all;
													}
													?> 
						 							<img src="<?php echo $show_img2 ?>" width="100%" />
												</div> 
											</div>
										</div> 
										</font> 
										
										
										</div> 
										</div>
									</div>
							</div>
						 <!-- end modal small --> 
						  
			<?php } ?>
			
			  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>   
			
		</div>
		  
		<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
		</script>	
			
			
				
		<div class="col-md-12" style="margin-top: 25px; margin-bottom: 25px; margin-left: 15px; margin-right: 15px;  " >  
 			<b>  <?php echo $objResult2["title"]; ?>  </b>
 			<Br>
 			<Br>
 			  <?php echo $objResult2["detail"]; ?>   
			<hr>
 			
 			 
			<br><br><bR><br> 
			<br><br><bR><br> 
		</div> 
		</div>
      
      <?php } ?> 
      
      
      
      
      
    </div>
  </div> 
</div>

<?php
include('footer.php');
?>
