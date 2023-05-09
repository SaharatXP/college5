<?php
session_start();
$_SESSION["load"] = "5";
include('header.php'); 
?>
       <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
  
<div id="wrapper" class="container">
  <h1 id="page-title"> ติดต่ออาจารย์ / เจ้าหน้าที่   </h1>
  <div class="row">
     
  <div class="row">
    <div class="col-md-12"> 
      <div class="announce-item">  
      
      
     	  <div class="row">
     	  <div class="col-lg-12">
    	  	 
     	  	 <div class="col-lg-12" > 
             <label for="username"> ติดต่ออาจารย์ / เจ้าหน้าที่  </label> <!--- User เก็บ User ในการล็อกอิน ---> 
     	     </div>
     	     
     	  	<?php 
			$i = 1;
			$sql = "SELECT * FROM member where pk = '".$_GET["CusID"]."'  order by pk desc ";  
			$query = mysqli_query($con,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{    				  
			?>  
     	   <div class="row">
     	   
    		<div class="col-lg-3" style="margin-top: 10px; " >  
       		<font color="black" size="3px" class="serif">     </font>  
			<?php
				if(empty($objResult["img"])){
					$show_img2 = "../images/up.png";
					
				}else{ 
					$show_img2 = "../img/".$objResult["img"];
				} 
			?> 
			<img id="blah" src="<?php echo $show_img2 ?>" alt="your image" width="100%"   />  
       	  
        	</div>
    		<div class="col-lg-9"   style="margin-top: 10px; ">   
                <div class="form-group">
                    <font size="3px" color="black">   

						ชื่อ - นามสกุล  :
						<?php echo $objResult["name"]; ?> <br>
						ชื่อ-นามสกุล (ภาษาอังกฤษ)  :
						<?php echo $objResult["name2"]; ?> <br>
						สถานที่ติดต่อ  :
						<?php echo $objResult["address"]; ?> <br> 
						เบอร์โทร   :
						<?php echo $objResult["telphone"]; ?> <br> 
						อีเมล์   :
						<?php echo $objResult["email"]; ?> <br>

					</font> 
                </div> 
        	</div>
        	 
     	    </div>
        	<?php } ?>
        	 
     	  </div>
        	
 
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
