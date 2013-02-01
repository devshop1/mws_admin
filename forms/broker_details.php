<script type="text/javascript"> 
		$(document).ready(function() {
		var broker//=new Array();
		$("#demo").load("forms/broker_drpdwn.php",function(responceText){
			broker=responceText.split(",");
			
			$( "#b_name" ).autocomplete({
				source: broker
			});
		});	
		
		var query_type='Temp';

			
		 $( "#b_name" ).bind( "autocompletechange", function() {
			
		  	var a=document.getElementById("b_name").value;
	    	$("#demo").load("forms/broker_up1.php",{js_name:a},function(responseText){  
				
				if(responseText.indexOf("new")!=-1)
				{
					query_type="new";
				}
				else
				{
					query_type="update";
					var str=responseText;
					alert(str);
					var str1=str.split(",");
					document.getElementById("b_code").value=str1[0];
					document.getElementById("b_name").value=str1[1];
					document.getElementById("b_add1").value=str1[2];
					document.getElementById("b_add2").value=str1[3];
					document.getElementById("b_add3").value=str1[4];
					document.getElementById("b_phno").value=str1[6];
					document.getElementById("b_brate").value=str1[7];
					document.getElementById("b_city").value=str1[5];
					
				}
          });
                 // alert(query_type);  
       });
       		
       	$("#ok").click(function(){
	     	
	     	
			        var b_code=document.getElementById("b_code").value;
					var b_name=document.getElementById("b_name").value;
					var b_add1=document.getElementById("b_add1").value;
					var b_add2=document.getElementById("b_add2").value;
					var b_add3=document.getElementById("b_add3").value;
					var b_phno=document.getElementById("b_phno").value;
					var b_brate=document.getElementById("b_brate").value;
					var city=document.getElementById("b_city").value;
					//alert(city)
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/broker_up2.php",{query_type:query_type,b_code:b_code,b_name:b_name,b_add1:b_add1,b_add2:b_add2,b_add3:b_add3,b_phno:b_phno,city:city,b_brate:b_brate},function(responseText){  
				alert(responseText)
				
          });
                 // alert(query_type);  
       });
	   
	   $("#delete_broker").click(function(){
	   
	   var b_name=document.getElementById("b_name").value;
	   
	               $("#demo").load("forms/broker_delete.php",{b_name:b_name},function(responseText){  
                               alert(responseText)

             });
	   });
	   
	       
		var availableTags//=new Array();
		$("#demo").load("forms/city.php",function(responceText){
			availableTags=responceText.split(",");
			
			$( "#b_city" ).autocomplete({
				source: availableTags
			});
		});	
       	
     });
				
</script>






<?php

echo"
<table style='border-spacing:10px;border-collapse:separate;width:100%;padding:30px'>
<tr>
<td>Broker_code </td><td><input class='mws-textinput' type='text' name='b_code' id='b_code' /></td>
</tr>
<tr>
<td>Broker_name </td><td><input class='mws-textinput' type='text' name='b_name' id='b_name'  /></td>
</tr>
<tr>
<td>Broker_add1 </td><td><input class='mws-textinput' type='text' name='b_add1' id='b_add1'  /></td>
</tr>
<tr>
<td>Broker_add2 </td><td><input class='mws-textinput' type='text' name='b_add2' id='b_add2'  /></td>
</tr>
<tr>
<td>Broker_add3 </td><td><input class='mws-textinput' type='text' name='b_add3' id='b_add3'  /></td>
</tr>
<tr>
<td>Broker_phno </td><td><input class='mws-textinput' type='text' name='b_phno' id='b_phno'  /></td>
</tr>
<tr>
<td>Broker_city </td><td><input class='mws-textinput' type='text' name='city' id='b_city'  /></td>
</tr>
<tr>
<td>Brate </td><td><input class='mws-textinput' type='text' name='b_brate' id='b_brate'  /></td>
</tr>
</table>
<div class='mws-button-row'>
				<input type='button' name='ok' id='ok' value='Confirm' class='mws-button red'/>
				<input type='reset' name='reset' value='Reset'  class='mws-button gray'/>
</div><div id='demo' style='visibility:hidden' ></div>";

?>