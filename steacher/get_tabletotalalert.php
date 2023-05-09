<?php
session_start();
    include('../db_config.php');
    
    $html = '';
 
	 
    $i = 0;
    $sql_job = "  SELECT * FROM tbl_chat where room = '".$_SESSION["roomdata"] ."'   order by pk asc  ";   
    $query = mysqli_query($objCon,$sql_job); 
    while($objResult = mysqli_fetch_array($query))
    {     
        	$i++;  
    }
 
 
	 


    print_r($i);
?>
 