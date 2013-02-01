<script type="text/javascript">
$(document).ready(function(){
	
	$('#b_code').click(function (e) {
								 var item_name=document.getElementById("item_name").value;
									  //alert(item_name);
									  $('#brand_code_name').load("forms/fetch_brands.php",{item_name:item_name},function(responseText){
									  //alert(responseText)
									});
								
		$('#brand_code_name').modal();
	});

	
	$("#item_name").autocomplete("item_drpdwn.php");
        var item_name//=new Array();
		$("#demo").load("forms/item_drpdwn.php",function(responceText){
						item_name=responceText.split(",");
			
			$( "#item_name" ).autocomplete({
				source: item_name
			});
		});
		
		
	
	$( "#item_name" ).bind( "autocompletechange", function() {
	                var name=document.getElementById("item_name").value;
			        $("#demo").load("forms/item.php",{js_name:name},function(responseText){  
				    document.getElementById("grp_code").value=responseText;
			
    	});
		
    });	
	 $("#delete_brand").click(function(){
	   
	   var brand_code=document.getElementById("b_code").value;
	   
	               $("#demo").load("forms/brand_delete.php",{brand_code:brand_code},function(responseText){  
                               alert(responseText)

             });
			 
		});	 
	
  
});	

function ul_unit()
{
 var upr=document.getElementById("upr").value;
 var lwr=document.getElementById("lwr").value;
 var str="1";
 var str2=str.concat(" ",upr," ","="," ",lwr);
 document.getElementById("ul").value=str2
document.getElementById("upper").value=upr;
document.getElementById("lower").value=lwr;
}

function cal_pcs()

{
var up_num=document.getElementById("qty1").value;
var qty=document.getElementById("pcs_qty").value;
var total=up_num*qty;
document.getElementById("qty2").value=total;
}


function pur_sal_cal()
{ 
   var num_qty=document.getElementById("pcs_qty").value;
   var pur_val=document.getElementById("pur").value;
   var pur_val1=pur_val/num_qty;
   document.getElementById("pur1").value=Math.round(pur_val1);
   var sal_val=document.getElementById("sal").value;  
   var sal_val1=sal_val/num_qty;
   document.getElementById("sal1").value=Math.round(sal_val1);
 

}

function get_next_data(a)
	{
		var items=a.split("-");
		var name=document.getElementById(items[0]).innerHTML;
		//alert(name);
		$("#brand_code_name").load("forms/fetch_brands.php",{item_name:name},function(responseText){  
				//alert(responseText)
		});
		
	}

function get_item_values(b)
	{
		//alert(b)
		var items=b.split("-");
		var item_name=document.getElementById(items[0]).innerHTML;
		var item_code=document.getElementById(items[0]+"-"+items[0]).innerHTML;
		document.getElementById("b_name").value=item_name;
		document.getElementById("b_code").value=item_code;
		//event.preventDefault();
		//$.modal.close();
	}
	
var query_type='Temp';

function fetch_item_details()
  {

  var code=document.getElementById("b_code").value;
  
  $("#demo").load("forms/brand_master_up1.php",{js_code:code},function(responseText){  
					if(responseText.indexOf("new")!=-1)
					{
					   //alert("new")
						query_type="new";
						
					}
					else
					{
						query_type="update";
						var str=responseText;
						//alert("--------"+responseText);
						var str1=str.split(",");
						//alert("--------"+str1[0]+"---------")
					document.getElementById("item_name").value=str1[0];	
					document.getElementById("dr").value=str1[1];
					document.getElementById("cr").value=str1[2];
					document.getElementById("pcs").value=str1[3];
					document.getElementById("bal").value=str1[4];
					document.getElementById("b_code").value=str1[5];
					//document.getElementById("addr").value=str1[4];
					//document.getElementById("contact").value=str1[6];
					document.getElementById("b_name").value=str1[6];
					document.getElementById("o_amnt").value=str1[7];
					document.getElementById("I_control").value=str1[8];
					document.getElementById("upr").value=str1[9];
					document.getElementById("lwr").value=str1[10];
					document.getElementById("qty1").value=str1[11];
					document.getElementById("qty2").value=str1[12];
     				document.getElementById("ul").value=str1[13];
					document.getElementById("pcs_qty").value=str1[14];
					document.getElementById("mrp").value=str1[15];
					document.getElementById("s_tax").value=str1[16];
					document.getElementById("type").value=str1[17];
					document.getElementById("hamali").value=str1[18];
					document.getElementById("tolai").value=str1[19];
					document.getElementById("pur").value=str1[20];
					document.getElementById("sal").value=str1[21];
					document.getElementById("pur1").value=str1[22];
					document.getElementById("sal1").value=str1[23];
	//				document.getElementById("balance").value=str1[30];
					

					
					
					
					}
			  })
			
		  
		       	$("#ok").click(function(){
		     //		alert("ok");
	     	
			      var item_name=document.getElementById("item_name").value;	
				  var op_bal_dr=document.getElementById("dr").value;
				  var op_bal_cr=document.getElementById("cr").value;
				  var op_bal_pcs=document.getElementById("pcs").value;
				  var op_bal=document.getElementById("bal").value;
				  var brand_code=document.getElementById("b_code").value;
					//document.getElementById("addr").value=str1[4];
					//document.getElementById("contact").value=str1[6];
				  var brand_name=document.getElementById("b_name").value;
				  var op_amnt=document.getElementById("o_amnt").value;
				  var inventory_control=document.getElementById("I_control").value;
				  var upper=document.getElementById("upr").value;
				  var lower=document.getElementById("lwr").value;
				  var qty1=document.getElementById("qty1").value;
				  var qty2=document.getElementById("qty2").value;
     			  var ul=document.getElementById("ul").value;
				  var pcs_qty=document.getElementById("pcs_qty").value;
				  var mrp=document.getElementById("mrp").value;
				  var sales_tax=document.getElementById("s_tax").value;
				  var type=document.getElementById("type").value;
				  var hamali=document.getElementById("hamali").value;
				  var tolai=document.getElementById("tolai").value;
				  var pur=document.getElementById("pur").value;
				  var sal=document.getElementById("sal").value;
				  var pur1=document.getElementById("pur1").value;
				  var sal1=document.getElementById("sal1").value;
			
			
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/brand_master_up2.php",{query_type:query_type,item_name:item_name,op_bal_dr:op_bal_dr,op_bal_cr:op_bal_cr,op_bal_pcs:op_bal_pcs,op_bal:op_bal,brand_code:brand_code,brand_name:brand_name,op_amnt:op_amnt,inventory_control:inventory_control,upper:upper,lower:lower,qty1:qty1,qty2:qty2,ul:ul,pcs_qty:pcs_qty,mrp:mrp,sales_tax:sales_tax,type:type,hamali:hamali,tolai:tolai,pur:pur,sal:sal,pur1:pur1,sal1:sal1},function(responseText){  
				alert(responseText)
				
          });
                 // alert(query_type);  
       
	   
	 });  

 
  }
	


	
</script>

<?php

echo"<div id='brand_code_name' style='height:400px;width:600px;padding-left:300px;overflow:scroll' >";
echo"</div>";
echo"
<center><br />
<table style='border-spacing:10px;border-collapse:separate;padding-left:10px;padding-top:20px'>
<tr>
<td>Item name</td>
<td><input type='text' name='item_name' id='item_name' class='mws-textinput' style='width:130px'/></td>
<td>Item Group Code</td>
<td><input type='text' name='grp_code' id='grp_code' class='mws-textinput' style='width:130px'/></td>
</tr>
<tr>
<td>Op Bal Dr</td>
<td><input type='text' name='dr' id='dr'  value='0.00' class='mws-textinput' style='width:130px'/></td>
<td>Op Bal Cr</td>
<td><input type='text' name='cr' id='cr'  value='0.00' class='mws-textinput' style='width:130px'/></td>
<td>Op Bal Pcs</td><td><input type='text' name='pcs' id='pcs'  value='0.00' class='mws-textinput' style='width:130px'/></td>
<td>Op Bal</td><td><input type='text' name='bal' id='bal' value='0.00' class='mws-textinput' style='width:130px'/></td>
</tr>
<tr>
<td>Brand code</td>
<td><input type='text' name='b_code' id='b_code' class='mws-textinput' style='width:130px' class='basic' onchange='fetch_item_details();'/></td>
<td>Brand name</td>
<td><input type='text' name='b_name' id='b_name' class='mws-textinput' style='width:130px'/></td>
<td>Opening Amoun</td>
<td><input type='text' name='o_amnt' id='o_amnt'  value='0.00' class='mws-textinput' style='width:130px'/></td>
</tr>
</table>
<br>
<center>
<table>
<tr>
<td> <label><strong>Inventory Control</strong></label></td> 
<td style='padding-top:5px'>Upper <input type='radio' name='I_control' id='I_control' value='u'  /></td>
<td style='padding-top:5px'>Lower <input type='radio' name='I_control' id='I_control' value='l'  /></td>
</tr>
</table>
<div style=''>
	<table style='border-spacing:5px;border-collapse:separate;width:750px;background-color:#E0E9E9;border-radius:10px;padding:20px'>
	<tr><th style='text-align:center'><strong>Unit</strong></th><th style='text-align:center'><strong>Opening Qty</strong></th><th style='text-align:center'><strong>Packing</strong></th></tr>
	<tr><td>Upper&nbsp;&nbsp;&nbsp;<input type='text' name='upr' id='upr' class='mws-textinput'/></td>
	<td><input type='text' name='qty1' id='qty1'  value='0.00' onChange='cal_pcs();' class='mws-textinput'/></td>
	<td><table><tr>
	<td><input type='text' name='ul' id='ul' onChange='ul_unit();' class='mws-textinput'/></td></tr><tr>
	<td><input type='text' name='pcs_qty' id='pcs_qty' value='0.00' onChange='cal_pcs();' class='mws-textinput'/></td></tr></table></td></tr>
	<tr>
	<td>Lower&nbsp;&nbsp;&nbsp;<input type='text' name='lwr' id='lwr' onChange='ul_unit();' class='mws-textinput'/></td>
	<td><input type='text' name='qty2' id='qty2'  value='0.00' class='mws-textinput'/></td>
	<td>M.R.P.&nbsp;&nbsp;&nbsp;<input type='text' name='mrp' id='mrp' value='0.00' class='mws-textinput'/></td>
	</tr>
	</table>
</div>
<table style='border-spacing:15px;border-collapse:separate;width:800px;'>
<tr>
<td>Sales tax</td><td><input type='text' name='s_tax' id='s_tax' value='0.00' class='mws-textinput'/></td>
<td><select name='type' id='type'><option>Dependon</option><option>Inclusive</option></select></td>
<td>Hamali</td><td><input type='text' name='hamali' id='hamali' value='0.00'  class='mws-textinput'/></td>
<td>Tolai</td><td><input type='text' name='total' id='tolai' value='0.00'  class='mws-textinput'/></td>
</tr>
<tr><td></td></tr>
</table>

<table border='2' height='40' cellspacing='1' style='border-spacing:15px;border-collapse:separate;width:750px;background-color:#E0E9E9;border-radius:10px;padding:20px'>
<tr><th style='text-align:center'><strong>Unit</strong></th><th style='text-align:center'><strong>Fix Rate</strong></th></tr>
<tr>
<td><input type='text' name='upper' id='upper'  class='mws-textinput'/></td>
<td>Purchase&nbsp;&nbsp;&nbsp;<input type='text' name='pur' id='pur' value='0.00' onChange='pur_sal_cal();'  class='mws-textinput'/>
   &nbsp;&nbsp;&nbsp; sale &nbsp;&nbsp;&nbsp;<input type='text' name='sal' id='sal' value='0.00'  onchange='pur_sal_cal();' class='mws-textinput'/></td>
</tr>
<tr>
<td><input type='text' name='lower' id='lower'  class='mws-textinput' /></td>
<td>Purchase&nbsp;&nbsp;&nbsp; <input type='text' name='pur1' id='pur1'  value='0.00' class='mws-textinput' />
    &nbsp;&nbsp;&nbsp;sale &nbsp;&nbsp;&nbsp;<input type='text' name='sal1' id='sal1' value='0.00' class='mws-textinput' /></td>
</tr>
</table>
<br /><br />
<table>
 
 </table>


<div class='mws-button-row'>
				<input type='button' name='b' value='Confirm' id='ok' class='mws-button red'/>
				<input type='reset' name='reset' value='Reset'  class='mws-button gray'/>
			<div id='main2' style='visibility:hidden'></div>
</center>
<div id='demo' style='visibility:hidden' ></div>";
?>