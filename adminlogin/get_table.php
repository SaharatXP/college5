<?php
session_start();
    include('../db_config.php');
    
    $html = '';

    $i = 1;
    $sql = "SELECT * FROM data_class where iddata = ''  "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    {
		$name_produt1 = "";
		$name_produt2 = "";
		$name_produt3 = "";  
		 
		
        	$html .= '<tr>
            <td > <div align="center"><font color="black" class="PromptR"  size = "3px" >
            '.$i.'   </font> </div>   </td>
				  
			<td align="center"><font color="black" class="serifSB"> 
			
			<input type="hidden" name="menuid'.$objResult["pk"].'"  id="menuid'.$objResult["pk"].'"  placeholder="   "  value="'.(($objResult["pk"])).'"  class="form-control PromptR" style="width: 100%; text-align: center;  background-color: white; color: black;" readonly > </font> 
			  
			  
			<input type="text" name="stotal'.$objResult["pk"].'"  id="stotal'.$objResult["pk"].'"  placeholder="   "  value="'.$objResult["data1"].'"  class="form-control PromptR" style="width: 100%; text-align: center;  background-color: white; color: black;"   onKeyUp="Chgtotal('.$objResult["pk"].')"   > </font> 
            </td>
		   
			  
          
			
			<td align="center"><font color="black" class="serifSB"> 
			 
			<input type="text" name="sdatatwo'.$objResult["pk"].'"  id="sdatatwo'.$objResult["pk"].'"  placeholder="   "  value="'.$objResult["data2"].'"  class="form-control PromptR" style="width: 100%; text-align: center;  background-color: white; color: black;"   onKeyUp="Chgtotal('.$objResult["pk"].')"   > </font> 
            </td>
		   
			  
            <td  >
			
			
            <div align="center"> 
              <button type="button" class="btn btn-danger btn-delete-fuck1"   data-id="'.$objResult["pk"].'"> 
			  <font color="white" class="PromptR" > ลบ </font> </button> 
            </div></td>  
        </tr>';

        $i++; 
    }

    print_r($html);
?>