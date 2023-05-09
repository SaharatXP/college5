<?php
session_start();
$_SESSION["load"] = "3";
include('header.php'); 

$_SESSION["roomdata"] = $_GET["room"];

			$room_name = "";
			$sql2 = "SELECT * FROM boardroom where pk = '".$_GET["room"]."' order by pk desc "; 
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{ 
				$room_name = $objResult2["title"];
			}
?>
  
<div id="wrapper" class="container" >
  <h1 id="page-title"> ห้องสนทนา </h1>
  <div class="row" >
    <div class="col-md-12">
      <div class="section-title">
        ห้องสนทนา 
      </div>

      
       	<div id="wrapper" class="container">  
      	<div id="chat-container">
           <sidebar id="chat-sidebar">
          <div class="title">
            <div class="close">
              <a href="javascript:;">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </a>
            </div>
            รายชื่อในห้องสนทนา
          </div>
          <div class="list-wrap" id="listorder">
          
          </div>
        </sidebar>  

             

          <div id="chat-content">
          <div class="chat-content-header">
            <div class="open">
              <a href="javascript:;">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </a>
            </div>
            <?php 
			$img = "";
			$memberpk = ""; 
			  
			$_SESSION['ses_user_id'] = $_SESSION["UserID3"]; ////ผู้ส่ง
			$_SESSION['ses_user_id2'] = $_GET["room"]; /// ผู้รับ
	
	
			?>	
           <?php $show_img2 = "images/logo.png"; ?> 
               <img src="<?php echo $show_img2; ?>">
            <div class="info">
              <span class="user"> <?php echo $room_name; ?> </span>
              <span class="time"></span>
            </div>
          </div>
          <div class="message-wrap" id="messagesDiv">
			 
			  
             
          </div>
          
          <div class="message-footer">
           
           <input type="hidden" class="form-control" name="userID1" id="userID1" value="<?=(isset($_SESSION['ses_user_id']))?$_SESSION['ses_user_id']:''?>" placeholder="UserID 1">
		   <input type="hidden" class="form-control" name="userID2" id="userID2" value="<?=(isset($_SESSION['ses_user_id2']))?$_SESSION['ses_user_id2']:''?>" placeholder="UserID 2">
		   <input name="h_maxID" type="hidden" id="h_maxID" value="0">
           
           
            <input type="text"  name="msg" id="msg" />
             
             
             <style>
			  input[type="file"] {
					display: none;
				}
				.custom-file-upload2 {
					border: 1px solid #ccc;
					display: inline-block;
					padding: 6px 6px;
					cursor: pointer;
				}
			  </style>
           
             <span style="margin-left: 5px; "  >
			  <label for="file-upload" class="custom-file-upload2">
				<i class="fa fa-cloud-upload"></i> File Upload
			  </label>
			  <input id="file-upload" type="file" name="sortpicture"  />
			</span>
           
           
            <span class="button-send"  id="savefuck2" >
               <img src="images/se1.png" style="width: 20px; margin-top: -5px; " >
            </span> 
            
             
  		 	<input type="hidden" id="checkalert" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" >
         
		    <script src="chat/jquery.min.js"></script>      
  		    
		    <script type="text/javascript">
			 	 $( document ).ready(function() {   
					  checkpayment();    
					  load_list();   
					 
					  
				 }); 
				 
				  
			 /// เมื่อพิมพ์ข้อความ แล้วกดส่ง ด้วยปุ่ม Enter
			 $("#msg").keypress(function (e) { // เมื่อกดที่ ช่องข้อความ  
				if (e.keyCode == 13) { // ถ้ากดปุ่ม enter  
				  var user1 = $("#userID1").val(); // เก็บ id user  ผู้ใช้ที่ส่ง
				  var user2 = $("#userID2").val(); // เก็บ id user  ผู้ใช้ที่รับ
				  var msg = $("#msg").val();  // เก็บค่าข้อความ  


				  $.post("ajax_chat.php",{
					  user1:user1,
					  user2:user2,
					  msg:msg
				  },function(data){
						 checkpayment();  // เรียกใช้งานฟังก์ช่นแสดงข้อความล่าสุด
						 load_list();  // เรียกใช้งานฟังก์ช่นแสดงข้อความล่าสุด
						$("#msg").val(""); // ล้างค่าช่องข้อความ ให้พร้อมป้อนข้อความใหม่  		  
				  });

				}  
			  });  
				
				 
			  ///// ปุ่มเพิ่ม 
			 $(document).on('click', '#savefuck2', function() {
  				  var user1 = $("#userID1").val(); // เก็บ id user  ผู้ใช้ที่ส่ง
				  var user2 = $("#userID2").val(); // เก็บ id user  ผู้ใช้ที่รับ
				  var msg = $("#msg").val();  // เก็บค่าข้อความ  
				
				 
				  $.post("ajax_chat.php",{
					  user1:user1,
					  user2:user2,
					  msg:msg
				  },function(data){
						 checkpayment();  // เรียกใช้งานฟังก์ช่นแสดงข้อความล่าสุด
						 load_list();  // เรียกใช้งานฟังก์ช่นแสดงข้อความล่าสุด
						$("#msg").val(""); // ล้างค่าช่องข้อความ ให้พร้อมป้อนข้อความใหม่  		  
				  });


					var file_data = $('#file-upload').prop('files')[0];   
					var form_data = new FormData();                  
					form_data.append('file', file_data);       
					$.ajax({
						url: 'ajax_chat.php', // <-- point to server-side PHP script 
						dataType: 'text',  // <-- what to expect back from the PHP script, if anything
						cache: false,
						contentType: false,
						processData: false,
						data: form_data,                         
						type: 'post',
						success: function(php_script_response){ 

							 checkpayment();  
							 load_list();  
							$("#file-upload").val(""); 
							$("#msg").val("");

						}
					 });
				 
				 
				 
			 });
 
  
			function checkpayment() { 
					 var check =	document.getElementById("checkalert").value;
				 		
										
					 var int1 = 0;
					 if(check == ""){
											
					 }else{
						 int1 = parseFloat(check);
					 }
								
					 $.ajax({
					 type: "GET",
					 url: "get_tabletotalalert.php",
					 success: function(result) {  
						   
						 if(int1 != result){
						   getTabel1();  
						   document.getElementById("checkalert").value = parseFloat(result); 
							    
							   
						   }  
						 
						  
						 }
					 });
					 
					
				 }
			function Downdata() { 
			var div = $("#messagesDiv");
    		div.scrollTop(div.prop('scrollHeight'));
			}
			function getTabel1() { 
			$.ajax({
				type: "GET",
				url: "get_table.php",
				success: function(result) {
				$('#messagesDiv').html(result);
					
						   Downdata(); 
				}
				});
			 }
			function load_list() { 
										$.ajax({
											type: "GET",
											url: "get_tablelistorder.php",
											success: function(result) {
												$('#listorder').html(result);
											}
										});
				 }
				
			setInterval(function(){  
				    checkpayment();   
				 
			     }, 1500);
				
			</script>
         
         
    	 <script type="text/javascript" src="js/chat.js"></script>
         
          </div>
        </div> 
        </div>
    	</div>
      
       
    </div>
  </div>
  
</div>

<?php
include('footer.php');
?>
