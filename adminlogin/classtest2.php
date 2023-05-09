<?php 
session_start();
$_SESSION["load"] = "10";
include('header2.php');
 
 		 $data1 = ""; 
 		 $data2 = ""; 
 		 $data3 = ""; 
 		 $data4 = ""; 
 		 $data5 = ""; 
 		 $data6 = ""; 
 		 $data7 = ""; 
 		 $data8 = ""; 
 		 $data9 = ""; 
 		 $data10 = ""; 
		 
 

		$searchname = "";
		 
		if(empty($_GET["classdata"])){
			
		}else{
			$searchname = $_GET["classdata"];
			$_SESSION["showclassdata"] = $_GET["classdata"];
		}
		 
?>  
                 <!--- โหลดข้อมูลจากฐานข้อมูล --->
                   <?php if(empty($_GET["page"])){
					
					$sql = "SELECT * FROM classdata Where  pk = '". $searchname ."' ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{ 
							$data1 = $objResult["data1"];   
							$data2 = $objResult["data2"];   
							$data3 = $objResult["data3"];   
							$data4 = $objResult["data4"];   
							$data5 = $objResult["data5"];   
							$data6 = $objResult["data6"];   
							$data7 = $objResult["data7"];   
							$data8 = $objResult["data8"];   
							$data9 = $objResult["data9"];   
							$data10 = $objResult["data10"];   
				 
					} 
	
					$_SESSION["showclasscode"] = $data1;
					$_SESSION["showclasscode2"] = $data4;
					$_SESSION["showclasscode3"] = $data3;
					$_SESSION["showclasscode4"] = $data6;
					
					?> 
                	
                   
				  <div class="row" >
				  <div class=" col-lg-12 "  >  
                   <?php 
				 	$_GET['iddata'] = $searchname;  
				    include("table_schedule2.php");?>  	
                    <?php } ?> 
				  </div>
				  </div>
                     
 