<script type="text/javascript"> 

  
		$(document).ready(function() {
            var availableTags//=new Array();
		$("#demo").load("forms/city.php",function(responceText){
						availableTags=responceText.split(",");
			
			$( "#city_name" ).autocomplete({
				source: availableTags
               	
			});
		});	
		 var query_type='Temp';
		  
		  $("#ok").click(function(){
	     	
	     	var a=document.getElementById("city_name").value;
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/city_up.php",{city_name:a},function(responseText){  
				
				alert(responseText)
	 	      
		 }); 
		  
	  });	  
     
  });	

</script>

<?php
		echo "<table style='border-spacing:10px;border-collapse:separate;width:100%;padding:30px'>
		<tr><td>Enter new City</td><td><input class='mws-textinput' type='text' name='city' id='city_name'  class='mws-textinput'/></td></tr>
		</table>
		<div class='mws-button-row'>
				<input type='button' name='b' value='Confirm' id='ok' class='mws-button red'/>
				<input type='reset' name='reset' value='Reset'  class='mws-button gray'/>
		</div><div id='demo' style='visibility:hidden' ></div>";
?>