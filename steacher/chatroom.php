<?php
session_start();
$_SESSION["load"] = "3";
include('header.php'); 
?>
  
<div id="wrapper" class="container" >
  <h1 id="page-title"> ห้องสนทนา </h1>
  <div class="row" >
    <div class="col-md-12">
      <div class="section-title">
        ห้องสนทนา 
      </div>

      
      
      	<?php  			
			$allpage = 0;
			$sql2 = "SELECT * FROM boardroom order by pk desc "; 
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{     
		  ?>
		  			
		  			
      <div class="col-lg-12" style="border-bottom: 1px solid black; margin-top: 10px; ">
      	<div class="col-lg-3">
      		
      		<img src="images/logo.png" style="width: 100%;" >
      		
     	<br> 
     	<br> 
      	</div>
      	<div class="col-lg-9">
      	
      	  <a href="chatroom_on.php?room=<?php echo $objResult2["pk"]; ?>">
      		<div class="announce-item-title"> <font color="black"> <?php echo $objResult2["title"]; ?> </font> </div>
			<div class="announce-item-content"> <font color="black">   จำนวนสมาชิกในห้อง : <?php echo number_format(0+99); ?> คน  </font> </div> 
      	  </a>
      	  
     	<br> 
      </div>
      </div>
      
      <?php } ?>
      	 
      
      
       
    </div>
  </div>
  
</div>

<?php
include('footer.php');
?>
