<script type="text/javascript"> 
$(document).ready(function(){
    
	$(".flip").click(function(){
  
          $(".panel").slideToggle("slow");
    });
	
	$('#gr_no').click(function (e) {
								// alert(1)
		$('#basic-modal-content_group').modal();
	});
	
		
		
		$('#code').click(function (e) {
								
									 var gr_code=document.getElementById("gr_no").value;
									  //alert(name)
									  $('#basic-modal-content_code').load("forms/fetch_grp.php",{gr_code:gr_code},function(responseText){
									  //alert(responseText)
									});
								//	  alert(1)
		$('#basic-modal-content_code').modal();
	});
	
	 $("#delete_account").click(function(){
	   
	   var gr_type=document.getElementById("code").value;
	   
	               $("#demo").load("forms/account_delete.php",{gr_type:gr_type},function(responseText){  
                               alert(responseText)

             });
			 
		});	 
	
	    var availableTags//=new Array();
		$("#demo").load("forms/city.php",function(responceText){
						availableTags=responceText.split(",");
			
			$( "#a_city" ).autocomplete({
				source: availableTags
			});
		});
});	
	
	var query_type='Temp';

function update_acc_info()
	{
	
	 //alert("hiiiii");
	 var gr_type=document.getElementById("code").value;
			if(gr_type=='')
			{
			}
			else
			{
	     	/* here "demo" is the id of the div element where u want to write response */
				$("#demo").load("forms/acc_det_info_up1.php",{gr_type:gr_type},function(responseText){  
					if(responseText.indexOf("new")!=-1)
					{
						query_type="new";
						
					}
					else
					{
						query_type="update";
						var str=responseText;
						//alert(str);
						var str1=str.split(",");
					document.getElementById("add").value=str1[1];	
					document.getElementById("a_city").value=str1[2];
					document.getElementById("phno").value=str1[3];
					document.getElementById("shr_nm").value=str1[0];
					document.getElementById("fax").value=str1[4];
					document.getElementById("email").value=str1[5];
					document.getElementById("cst").value=str1[6];
					document.getElementById("tin").value=str1[7];
					document.getElementById("pan").value=str1[8];
					document.getElementById("person1").value=str1[11];
					document.getElementById("person2").value=str1[12];
					document.getElementById("bank_name").value=str1[9];
					document.getElementById("bank_no").value=str1[10];
					document.getElementById("bazar_day").value=str1[13];
					document.getElementById("dis").value=str1[14];
					document.getElementById("scheme1").value=str1[15];
					document.getElementById("scheme2").value=str1[16];
					
					
					
					
					
					}
			  })
					  
      		         	
        }
		  
		       	$("#ok").click(function(){
				  //alert("hellooooo");
	     	
			        var gr_no=document.getElementById("gr_no").value;
					//var gr_nm=document.getElementById("gr_nm").value;
        	     	var gr_type=document.getElementById("code").value;
					var name=document.getElementById("name").value;
					var add=document.getElementById("add").value;	
					var city=document.getElementById("a_city").value;
					var phno=document.getElementById("phno").value;
					var shr_nm=document.getElementById("shr_nm").value;
					var fax=document.getElementById("fax").value;
					var email=document.getElementById("email").value;
					var cst=document.getElementById("cst").value;
					var tin=document.getElementById("tin").value;
					var pan=document.getElementById("pan").value;
					var person1=document.getElementById("person1").value;
					var person2=document.getElementById("person2").value;
					var bank_name=document.getElementById("bank_name").value;
					var bank_no=document.getElementById("bank_no").value;
					var bazar_day=document.getElementById("bazar_day").value;
					var dis=document.getElementById("dis").value;
					var scheme1=document.getElementById("scheme1").value;
					var scheme2=document.getElementById("scheme2").value;
			  
			
			//alert("hhhhhhhhhhhhh");
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/acc_det_info_up2.php",{query_type:query_type,gr_no:gr_no,gr_type:gr_type,name:name,add:add,city:city,phno:phno,shr_nm:shr_nm,fax:fax,email:email,cst:cst,tin:tin,pan:pan,person1:person1,person2:person2,bank_name:bank_name,bank_no:bank_no,bazar_day:bazar_day,dis:dis,scheme1:scheme1,scheme2:scheme2},function(responseText){  
				alert(responseText)
				
          });
                 // alert(query_type);  
       });
	
	}			

	
		
  
  	


function get_item_values(b)
	{
		//alert(b)
		var items=b.split("-");
		var gr_no=document.getElementById(items[0]).innerHTML;
		var gr_name=document.getElementById(items[0]+"-"+items[0]).innerHTML;
		document.getElementById("gr_no").value=gr_no;
		document.getElementById("gr_nm").value=gr_name;
		event.preventDefault();
		
	}
	
	function get_grp_values(a)
	{
	 // alert(a)
		var grp=a.split("-");
		var code=document.getElementById(grp[0]).innerHTML;
		var name=document.getElementById(grp[0]+"-"+grp[0]).innerHTML;
		document.getElementById("code").value=code;
		document.getElementById("name").value=name;
		event.preventDefault();
		
		    	//$.modal.close();
	
	}
	
function close_window()
	{
	
	   $.modal.close();
	}

</script>
 
<style type="text/css"> 
div.panel,p.flip
{
margin:0px;
padding:5px;
text-align:center;
}
div.panel
{
height:120px;
display:none;
}
</style>


<?php
echo"<div id='basic-modal-content_group' style='height:600px;width:400px;padding-left:300px;overflow:scroll' >
				<table border='1' cellpadding='2' style='color:#CCCCCC'>";
						
						 include("conectivity/cone.php");
							$query="select * from group_master";
							$result=mysql_query($query,$con);
							//echo "<tr>";
							$i=0;
							while($row=mysql_fetch_assoc($result))
							{
								echo "<tr><td id='$i' ondblclick='get_item_values(this.id)'>".$row['BSNO']."</td>"."<td id='$i-$i' ondblclick='get_item_values(this.id)'>".$row['ASSET_HEADING']."</td></tr>";
								$i++;
							}
						
	 echo"<tr><td id='td3' colspan='2'></td></tr></table>
     	<br /><br /><center><table><tr><input class='modalCloseImg simplemodal-close' type='button' name='b1' value='OK' id='btn-close'        onclick='close_window()' /></tr></table></center></div>";
		
	    echo"<div id='basic-modal-content_code' style='height:300px;width:400px;padding-left:300px;overflow:scroll' >";
				
				echo"</div>";

		 

		
		
		                 

echo"<div id='demo' style='visibility:hidden' ></div>
<div style='padding:40px'>
<table style='border-spacing:10px;border-collapse:separate;width:580px;'>
<tr>
<td>Group_no</td><td><input  type='text' name='gr_no' id='gr_no' class='mws-textinput' class='basic'/></td><td></td>
<td>Group_name</td><td><input class='mws-textinput' type='text' name='gr_nm' id='gr_nm' class='basic'/></td>   
<td>Code</td><td><input class='mws-textinput' type='text' name='code' id='code' class='basic' onchange='update_acc_info()' /></td><td></td>
<td>Name</td><td><input class='mws-textinput' type='text' name='name' id='name' class='basic' /></td>
</tr>
</table>

<table style='border-spacing:10px;border-collapse:separate;width:580px;background-color:#E0E9E9;border-radius:10px;padding:20px;width:90%'>
<tr>
<td style='text-align:center' colspan='4'><strong>Opening Balance </strong></td><td colspan='4' style='text-align:center'><strong>Closing Balance</strong></td>
</tr>
<!--<tr>
<td style='text-align:center' colspan='4'><hr></td><td colspan='4' style='text-align:center'><hr></td>
</tr>-->

<tr>
<td>Dr.</td><td><input class='mws-textinput' type='text' name='dr' id='dr'  /></td>
<td>Cr.</td><td><input class='mws-textinput' type='text' name='cr' id='cr'  /></td>
<td>Dr.</td><td><input class='mws-textinput' type='text' name='dr1' id='dr1'  /></td>
<td>Cr.</td><td><input class='mws-textinput' type='text' name='cr1' id='cr1'  /></td>
</tr>
</table>

<table style='border-spacing:10px;border-collapse:separate;width:780px;padding:20px'>
<tr>
<td>Address</td><td><input class='mws-textinput' type='text' name='add' id='add'  /></td>
<td>City</td><td><input class='mws-textinput' type='text' name='city' id='a_city'  /></td>
<td>Phno</td><td><input class='mws-textinput' type='text' name='phno' id='phno'  /></td>
<td>Short_name</td><td><input class='mws-textinput' type='text' name='shr_nm' id='shr_nm'  /></td>
</tr>
<tr>
<td>Fax</td><td><input class='mws-textinput' type='text' name='fax' id='fax'  /></td>
<td>E.mail</td><td><input class='mws-textinput' type='text' name='email' id='email'  /></td>
</tr><tr></tr>
<tr>
<td>CST</td><td><input class='mws-textinput' type='text' name='cst' id='cst'  /></td>
<td>TIN_NO</td><td><input class='mws-textinput' type='text' name='tin' id='tin'  /></td>
<td>PAN</td><td><input class='mws-textinput' type='text' name='pan' id='pan'  /></td>
</tr>
</table>

<div class='panel'>

<table style='border-spacing:10px;border-collapse:separate;width:780px;padding:20px;background-color:#E0E9E9;border-radius:10px;padding:20px;width:90%'>
<tr>
<td>Person1</td>
<td><input class='mws-textinput' type='text' name='person1' id='person1' ></td>
<td>Person2</td>
<td><input class='mws-textinput' type='text' name='person2' id='person2' ></td>
</tr>
<tr>
<td>Bank Name</td>
<td><input class='mws-textinput' type='text' name='bank_name' id='bank_name'></td>
<td>Bank_no</td>
<td><input class='mws-textinput' type='text' name='bank_no' id='bank_no' ></td>
</tr>
<tr>
<td>Bazar day</td>
<td><input class='mws-textinput' type='text' name='bazar_day' id='bazar_day' ></td>
<td>Discount</td>
<td><input class='mws-textinput' type='text' name='dis' id='dis'  /></td>
</tr>
<tr>
<td>Scheme1</td>
<td><input class='mws-textinput' type='text' name='scheme1' id='scheme1'  /></td>
<td>Scheme2</td>
<td><input class='mws-textinput' type='text' name='scheme2' id='scheme2'  /></td>
</tr>

</table>

</div>

<p class='flip' style='cursor:pointer;padding-top:80px;font-size:20px'><strong>More Info</strong></p>
</form>
<div class='mws-button-row'>
				<input type='button' name='ok' value='Confirm' id='ok' class='mws-button red'/>
				<input type='reset' name='reset' value='Reset'  class='mws-button gray'/>
</div>
</div>";
?>