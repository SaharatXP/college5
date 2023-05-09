<?php
session_start();
    include('../db_config.php');
    
    $html = '';

	 
    $i = 1; 
    $sql_job = "  SELECT * FROM tbl_chat where room = '".$_SESSION["roomdata"] ."'   order by pk asc  ";  
    $query = mysqli_query($objCon,$sql_job); 
    while($objResult = mysqli_fetch_array($query))
    {  
			$name_cutomer = " - ";
			$name_cutomer_img = " - ";
			$sql2 = "SELECT * FROM member Where  pk = '". $objResult["chat_user1"]."'   ";   
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{  
					$name_cutomer = $objResult2["name"];  
					$name_cutomer_img = $objResult2["img"];  
			}
		
		   
?>
  
  <?php if($objResult["chat_user1"] == $_SESSION["UserID3"]){  ?>
  <?php if($objResult["typedata"] == 1){  ?>
  
   <div class='message-list me' id='mydiv' > 
   <div class='msg'>  
   <font color='black'> <?php echo $objResult["chat_msg"]; ?> </font>  
   </div> 
   <div class='time' style="margin-top: 3px;"> 
   <font color='black'> <?php echo $name_cutomer." ".$objResult["chat_datetime"]; ?> </font>   </div> 
   </div>
   
  <?php }else if($objResult["typedata"] == 2){  ?>
  
   <div class='message-list me' id='mydiv' > 
   <div class='msg'>  
   <img src="../img/<?php echo $objResult["chat_msg"]; ?>" /> 
   </div> 
   <div class='time' style="margin-top: 3px;"> 
   <font color='black'> <?php echo $name_cutomer." ".$objResult["chat_datetime"]; ?> </font>   </div> 
   </div>
   
   <?php } ?> 
   <?php }else{  ?> 
   <?php if($objResult["typedata"] == 1){  ?>
  
   <div class='message-list  ' id='mydiv' > 
   <div class='msg'  style="background-color: #ADD8E6; " >  
   <font color='black'> <?php echo $objResult["chat_msg"]; ?> </font>  
   </div> 
   <div class='time' style="margin-top: 3px;"> 
   <font color='black'> <?php echo $name_cutomer." ".$objResult["chat_datetime"]; ?> </font>   </div> 
   </div>
   
  <?php }else if($objResult["typedata"] == 2){  ?>
  
   <div class='message-list  '  id='mydiv'> 
   <div class='msg'  style="background-color: #ADD8E6; " >  
   <img src="../img/<?php echo $objResult["chat_msg"]; ?>" /> 
   </div> 
   <div class='time' style="margin-top: 3px;"> 
   <font color='black'> <?php echo $name_cutomer." ".$objResult["chat_datetime"]; ?> </font>   </div> 
   </div>
   
   <?php } ?> 
   <?php } ?>
    
<?php	
	$i++; 
    }  
?>
 


<?php
	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)
	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 } 
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