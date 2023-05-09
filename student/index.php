<?php
session_start();
$_SESSION["load"] = "1";
include('header.php'); 
?>
  
<div id="wrapper" class="container" >
  <h1 id="page-title">หน้าหลัก</h1>
  <div class="row" >
    <div class="col-md-12">
      <div class="section-title">
        ข่าวสาร 
      </div>

      <div id="new_carousel" class="carousel slide" data-ride="carousel" style="background-color: #A0BCD0; " >
      
       <!--- รายการโหลดข่าว--->
       	<?php  			
			$allpage = 0;
			$sql2 = "SELECT * FROM news_report order by pk desc "; 
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{    
				$allpage++; 
			}  
		  $calpage = ($allpage/4)-1;
		  
		  if($calpage < 4){
			  $calpage = 0;
		  }
		  ?>
		  			
		  			
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php for($showpage = 0; $showpage <= $calpage; $showpage++){ ?> 
          <li data-target="#new_carousel" data-slide-to="<?php echo $showpage; ?>" class="<?php if($showpage==0){echo "active";} ?>"></li> 
          <?php } ?>  
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

           
          <?php for($showpage = 0; $showpage <= $calpage; $showpage++){ ?> 
			   <div class="item <?php if($showpage==0){echo "active";} ?>  ">
				<div class="row">
			  
			  	<?php 
				$i = 1;

				$perpage = 4;
				 
				$page = 1;
				 
											 
				$page = ($showpage+1); 
				$start = ($page - 1) * $perpage;
														
				/////// ***** ตรงส่วนนี้จะเป้นการโฆลด ข้อมูลข่าสาร 
				$sql2 = "SELECT * FROM news_report  order by pk asc limit {$start} , {$perpage}  ";  
				$query2 = mysqli_query($objCon,$sql2); 
				while($objResult2 = mysqli_fetch_array($query2))
				{ 
						$img = "";
						$img_all = "";
							$sql4 = "SELECT * FROM images  where bill_no = '".$objResult2["bill_no"]."' order by pk asc limit 1 "; 
							$query4 = mysqli_query($objCon,$sql4);
							while($objResult4 = mysqli_fetch_array($query4))
							{  
								$img = $objResult4["img"];
							} 
						$img_all = $img; 
				?>				
		 		<a href="view_news.php?CusID=<?php echo $objResult2["pk"]; ?>"  style="text-decoration:none " >
				  <div class="col-md-6">
					<div class="news-item">
					  <div class="news-item-img">
					  	<?php if(empty($img_all)){  ?>
						<img src="https://via.placeholder.com/1200x650" style="height: 120px;"   >
						<?php  }else{ ?>
						<img src="../adminlogin/uploads/<?php echo $img_all; ?>" style="height: 120px; width: 200px"    > <!-- ฟิกขนาดของภาพให้เท่ากัน --->
						<?php  }   ?>
              	 
					  </div>
					  <div class="news-item-detail">
						<div class="news-list-title">
						  <?php echo $objResult2["title"]; ?>
						</div>
						<div class="news-list-footer">
						  เผยแพร่เมื่อ:  <?php echo datethai($objResult2["date_start"])." ".datethai2($objResult2["date_start"]); ?>
						</div>
					  </div>
					</div>
				  </div>  
       			<?php } ?>
        		</div>
      			</div> 
      			</a> 
          <?php } ?>  
           
			    
 				   
		  			 
				 
        </div>
      </div>
    </div>
  </div>
  <div class="row"> 
		<div class="col-md-3" align="left">
                <div class="form-group">
                    <label for="username"> ประกาศทั้งหมด  : </label> 
				    <form action="index.php" method="get" >
                    <select class="form-control" id="dropshow" name="dropshow" required style="border-radius: 0px;"     onchange='this.form.submit()'     >
					 	<?php if(empty($_GET["dropshow"])){   ?>
						<option value="">  ประกาศทั้งหมด  </option>
						<?php } ?>
					  <?php 
						$sql = "SELECT * FROM drop_type2 where pk = '".$_GET["dropshow"]."' order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
					<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
						?>   
					  <?php 
						$sql = "SELECT * FROM drop_type2 where pk != '".$_GET["dropshow"]."'   order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
					<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
					<?php  
						}
						?>  
					 	<?php if(!empty($_GET["dropshow"])){   ?>
						<option value="">  ประกาศทั้งหมด  </option>
						<?php } ?>
				  </select>
                   </form>
                </div>
            </div>  
    <div class="col-md-12">
      <div class="section-title">
        ประกาศ
      </div>
       
      <?php
		//// โหลดข้อมูลประกาศ
		$addcode = "";
		if(empty($_GET["dropshow"])){
			
		}else{
			$addcode = " where title = '".$_GET["dropshow"]."' ";
		}
		$sql2 = "SELECT * , member.name as membername , news_report2.pk as news_pk FROM news_report2 
		LEFT JOIN member on member.pk = news_report2.createby
		LEFT JOIN classdata on classdata.pk = news_report2.subject
		LEFT join drop_type2 on drop_type2.pk = news_report2.title
		".$addcode."  order by news_report2.pk desc  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
						
		?>	 
		 <a href="view_news2.php?CusID=<?php echo $objResult2["news_pk"]; ?>"  style="text-decoration:none " >
		  <div class="announce-item"> 
			<div class="announce-item-title"> <font color="black">  <?php echo $objResult2["headdata"]; ?>  </font>  </div>
			<div class="announce-item-title"> ประเภท : <?php echo $objResult2["name"]; ?>  </div>
			<div class="announce-item-title"> วิชา : <?php echo (!$objResult2["data1"] ? '' : $objResult2["data1"])  . " - " . (!$objResult2["data2"] ? 'ไม่ทราบวิชา' : $objResult2["data2"]) ?>  </div>

			<div class="announce-item-content"> ประกาศโดย <?php echo $objResult2["membername"] ?> วันที่ประกาศ <?php echo datethai($objResult2["date_start"])." ".datethai2($objResult2["date_start"]); ?>  </div>
		  </div>
		 </a> 
      <?php } ?> 
    </div>
  </div>
</div>

<?php
include('footer.php');
?>
