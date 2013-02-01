<?php

include("conectivity/cone.php");
$sql1="SELECT max(ID) FROM purchase_det";
$result=mysql_query($sql1,$con);
while($myrow=mysql_fetch_row($result))
{
$id_value=$myrow[0]+1;
}
$entry_id='P';
$entry_id1=$entry_id.'_'.$id_value;

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript"> 
		$(document).ready(function() {
		
		var broker//=new Array();
		$("#demo").load("forms/broker_drpdwn.php",function(responceText){
			broker=responceText.split(",");
			
			$( "#broker_name" ).autocomplete({
				source: broker
			});
		});	
		
		$('#new_broker').click(function (e) {
								
		$('#basic-modal-content_broker').modal();
	});
		
		var suplier//=new Array();
		$("#demo").load("forms/cust_drpdwn.php",function(responceText){
			suplier=responceText.split(",");
			
			$( "#sup_name" ).autocomplete({
				source: suplier
			});
		});	
	   
	   	   
	   $( "#sup_name" ).bind( "autocompletechange", function() {
	     	var name=document.getElementById("sup_name").value;
	     	/* here "demo" is the id of the div element where u want to write response */
			if(name=='')
			{
			}
			else
			{
			$("#demo").load("forms/cust.php",{js_name:name},function(responseText){  
				var str=responseText;
				
				var str1=str.split(",");
				document.getElementById("add").value=str1[0];
                document.getElementById("contact1").value=str1[1];
 				document.getElementById("dis").value=str1[2];
                
          });
		  
		 } 
     
	 });
	   
	      $("#dt").change(function(){
	     	var name=document.getElementById("dt").value;
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/dt.php",{js_name:name},function(responseText){  
				document.getElementById("day").value=responseText;
				       
          });
       });


     $('#brand_name').click(function (e) {
								//	  alert(1)
		$('#basic-modal-content').modal();
	});
	

     $("#delete_purchase").click(function(){
	   
	   var bill_no=document.getElementById("bill_no").value;
	   
	               $("#demo").load("forms/purchase_delete.php",{bill_no:bill_no},function(responseText){  
                               alert(responseText)

             });
			 
		});	 
         	   

 });
	 

function pur_cal()
{
var qty1=document.getElementById("qty").value;
var rt=document.getElementById("rt").value;
var qty2=document.getElementById("qty1").value;
var rt1=document.getElementById("rt1").value;
if(qty1>0 && qty2<0)
{
  var amnt=qty1*rt;
  
} 
else if(qty2>0 && qty1<0)
{
var amnt=qty2*rt1;
}
else
{
var amnt=qty1*rt+qty2*rt1;
}
document.getElementById("amnt").value=amnt;
var tax=document.getElementById("vat").value;
var dis_per=document.getElementById("dis").value;
var dis_amnt=amnt*dis_per/100;
var dis_total=amnt-dis_amnt;
document.getElementById("dis_amnt").value=dis_amnt;

var taxamnt=dis_total*tax/100;
document.getElementById("tax_amnt").value=taxamnt;
var typ=document.getElementById("tax_typ").value;

if(typ == "Dependon")
{

      var total=dis_total+taxamnt;
      document.getElementById("total").value=Math.round(total);

}
else
{
      var total=dis_total-taxamnt;
      document.getElementById("total").value=Math.round(total);

}

}

function get_next_data(a)
	{
		var items=a.split("-");
		var name=document.getElementById(items[0]).innerHTML;
		//alert(name);
		$("#basic-modal-content").load("forms/fetch_brands.php",{item_name:name},function(responseText){  
				//alert(responseText)
		});
		
	}

	function get_item_values(b)
	{
		//alert(b)
		var items=b.split("-");
		var item_name=document.getElementById(items[0]).innerHTML;
		var item_code=document.getElementById(items[0]+"-"+items[0]).innerHTML;
		document.getElementById("brand_name").value=item_name;
		document.getElementById("brand_code").value=item_code;
		//event.preventDefault();
		//$.modal.close();
	}
	
	function fetch_item_details()
	{
		var code=document.getElementById("brand_code").value;
		//alert(name);
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/shw_unit.php",{js_code:code},function(responseText){  
				
				var str_unit=responseText;
				
				var str1_unit=str_unit.split(",");
	              var unit_str="1".concat(" ",str1_unit[0]);
				  var unit_str1=unit_str.concat("=",str1_unit[2],str1_unit[1]);
				  document.getElementById("shw_unit").value=unit_str1;
                  document.getElementById("mrp").value=str1_unit[3];
				  document.getElementById("vat").value=str1_unit[4];
				  document.getElementById("tax_typ").value=str1_unit[5];
				  document.getElementById("rt").value=str1_unit[8];
				  document.getElementById("rt1").value=str1_unit[9];
				  
				  
				  if(responseText)
				  {
				  	//alert(responseText);
				  	$.modal.close();
					//window.close();
				  }
				  
	        });
			
			
		
	}
var query_type='Temp';
	   	/* here "click_me" is the id of the button that's why I have used # sign to access an element from his id */
	    // $("#broker").change(function(){
	     function update_purchase()
		 {	
		 	//alert(1);
	     	var billno=document.getElementById("bill_no").value;
			if(billno=='')
			{
			}
			else
			{
	     	/* here "demo" is the id of the div element where u want to write response */
				$("#demo").load("forms/purchase_up1.php",{js_name:billno},function(responseText){  
					if(responseText.indexOf("new")!=-1)
					{
						query_type="new";
						
					}
					else
					{
						query_type="update";
						var str=responseText;
						var str1=str.split(",");
					document.getElementById("dt").value=str1[0];	
					document.getElementById("bill_no").value=str1[2];
					document.getElementById("entry_id").value=str1[1];
					document.getElementById("bill_dt").value=str1[3];
					document.getElementById("day").value=str1[22];
					document.getElementById("sup_name").value=str1[4];
					//document.getElementById("addr").value=str1[4];
					//document.getElementById("contact").value=str1[6];
					document.getElementById("mode").value=str1[5];
					document.getElementById("broker_name").value=str1[6];
					document.getElementById("brand_name").value=str1[7];
					document.getElementById("brand_code").value=str1[8];
					document.getElementById("typ").value=str1[9];
					document.getElementById("mrp").value=str1[10];
					document.getElementById("qty").value=str1[11];
					document.getElementById("qty1").value=str1[12];
					document.getElementById("rt").value=str1[13];
					document.getElementById("rt1").value=str1[14];
					document.getElementById("amnt").value=str1[15];
					document.getElementById("tax_typ").value=str1[16];
					document.getElementById("vat").value=str1[17];
					document.getElementById("tax_amnt").value=str1[18];
					document.getElementById("dis").value=str1[19];
					document.getElementById("dis_amnt").value=str1[20];
					document.getElementById("total").value=str1[21];
//					document.getElementById("recv").value=str1[29];
	//				document.getElementById("balance").value=str1[30];
					

					
					
					
					}
			  })
			}		  
		  
		       	$("#done").click(function(){
				alert("okkk");
	     	
			        var date=document.getElementById("dt").value;
					var entry_id=document.getElementById("entry_id").value;
        	     	var bill_no=document.getElementById("bill_no").value;
					var bill_dt=document.getElementById("bill_dt").value;
					var day=document.getElementById("day").value;
					var sup_name=document.getElementById("sup_name").value;
					//document.getElementById("addr").value=str1[4];
					//document.getElementById("contact").value=str1[6];
					var mod=document.getElementById("mode").value;
					var broker=document.getElementById("broker_name").value;
					var brand_name=document.getElementById("brand_name").value;
					var brand_code=document.getElementById("brand_code").value;
					var typ=document.getElementById("typ").value;
					var mrp=document.getElementById("mrp").value;
					var qty=document.getElementById("qty").value;
					var qty1=document.getElementById("qty1").value;
					var rt=document.getElementById("rt").value;
					var rt1=document.getElementById("rt1").value;
					var amnt=document.getElementById("amnt").value;
					var tax_typ=document.getElementById("tax_typ").value;
					var vat=document.getElementById("vat").value;
					var tax_amnt=document.getElementById("tax_amnt").value;
					var dis=document.getElementById("dis").value;
					var dis_amnt=document.getElementById("dis_amnt").value;
					var total=document.getElementById("total").value;
					//var recv=document.getElementById("recv").value;
					//var balance=document.getElementById("balance").value;
			  
			
			
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/purchase_up2.php",{query_type:query_type,date:date,entry_id:entry_id,bill_no:bill_no,bill_dt:bill_dt,day:day,sup_name:sup_name,mod:mod,broker:broker,brand_name:brand_name,brand_code:brand_code,typ:typ,mrp:mrp,qty:qty,qty1:qty1,rt:rt,rt1:rt1,amnt:amnt,tax_typ:tax_typ,vat:vat,tax_amnt:tax_amnt,dis:dis,dis_amnt:dis_amnt,total:total},function(responseText){  
				alert(responseText)
				
          });
                 // alert(query_type);  
       });
	 
	}  

		
		
</script>		


</head>
<div id="basic-modal-content_broker" style="height:400px;width:400px;padding-left:300px">
  <?php
           include("../forms/broker_details.php");
  
  ?>
  
</div>

<body>
<div id="basic-modal-content" style="height:200px;width:400px;padding-left:300px">
				<table border="1" cellpadding="2" style="color:#CCCCCC">
						<?php
							$query="select * from item_master";
							$result=mysql_query($query,$con);
							//echo "<tr>";
							$i=0;
							while($row=mysql_fetch_assoc($result))
							{
								echo "<tr><td id='$i' ondblclick='get_next_data(this.id)'>".$row['group_name']."</td>"."<td id='$i-$i' ondblclick='get_next_data(this.id)'>".$row['group_code']."</td></tr>";
								$i++;
							}
							
							
							//echo "</tr>";
						?>
						
					
				<tr>
				   <td id="td3" colspan="2">
							
					</td>
				</tr>
			</table>	
		</div>


<table style="border-spacing:10px;border-collapse:separate;width:780px;padding:20px">
<tr>
<td>Date</td>
<td><input class='mws-textinput' type="text" name="dt" id="dt" /></td>
<td>Day</td>
<td><input class='mws-textinput'type="text" name="day" id="day"  /></td>
</tr>
<tr>
<td>Entry_id </td>
<td><input class='mws-textinput'type="text" name="entry_id" id="entry_id" value="<?php echo $entry_id1 ?>" /></td>
<td>Bill_no</td>
<td><input class='mws-textinput'type="text" name="bill_no" id="bill_no" onChange="update_purchase()"/></td>
<td>Date</td>
<td><input class='mws-textinput'type="text" name="bill_dt" id="bill_dt" /></td>
</tr>
<tr>
<td>Supplier</td>
<td><input class='mws-textinput'type="text" name="sup_name" id="sup_name" /></td>
<td>Address</td>
<td><input class='mws-textinput'type="text" name="add" id="add" /></td>
<td>contact1</td>
<td><input class='mws-textinput'type="text" name="contact1" id="contact1" /></td>
</tr>
<tr>
<td>Payment_mode</td>
<td><select name="mode" id="mode"><option>Credit</option><option>Cash</option></select></td>
<td>Broker</td>
<td><input class='mws-textinput'type="text" name="broker" id="broker_name"  /></td>
<td><input type="button" name="b" value="Add_New Broker" id="new_broker" class="basic"/></td>
</tr>
<tr>
<td>Brand_name</td>
<td><input class='mws-textinput'type="text" name="brand_name" id="brand_name" class="basic" /></td>
<td>Brand_code</td>
<td><input class='mws-textinput'type="text" name="brand_code" id="brand_code" /></td>

<td>Purchase_type</td>
<td><select name="typ" id="typ" style="width:70x"><option>TaxFree</option>
                                <option >RD</option>
								<option >URD</option>
								<option >EXEMPT</option>
								<option >OMS</option></select>  </td>
</tr>
<tr>
<td>MRP</td>
<td><input class='mws-textinput'type="text" name="mrp" id="mrp"  value="0"/></td><td></td>
<td><input class='mws-textinput'type="text" name="shw_unit" id="shw_unit" readonly=""  /></td></tr>
<tr>
<td>Qty</td>
<td><input class='mws-textinput'type="text" name="qty" id="qty"  value="0" onChange="pur_cal();"/></td>
<td>Qty1</td>
<td><input class='mws-textinput'type="text" name="qty1" id="qty1"  value="0" onChange="pur_cal();"/></td>
<td>Rate</td>
<td><input class='mws-textinput'type="text" name="rt" id="rt" value="0" onChange="pur_cal();"/></td>
<td>Rate1</td>
<td><input class='mws-textinput'type="text" name="rt1" id="rt1"  value="0" onChange="pur_cal();"/></td></tr><tr>
<td>Amount</td>
<td><input class='mws-textinput'type="text" name="amnt" id="amnt" value="0" readonly=""/></td>
<td>dis_per %</td>
<td><input class='mws-textinput'type="text" name="dis" id="dis" value="0" onChange="pur_cal();"/></td>
<td>dis_amount</td>
<td><input class='mws-textinput'type="text" name="dis_amnt" id="dis_amnt"  value="0" readonly=""/></td></tr>
<tr>
<td>Tax_type</td>
<td><select name="tax_typ" id="tax_typ" onChange="pur_cal();" >
<option>Dependon</option><option>Inclusive</option></select></td>
<td>Tax</td>
<td><input class='mws-textinput'type="text" name="vat" id="vat" value="0" onChange="pur_cal();"/></td>
<td>Tax_amount</td>
<td><input class='mws-textinput'type="text" name="tax_amnt" id="tax_amnt"  value="0" readonly=""/></td>
</tr>
<tr>
<td>Total</td>
<td><input class='mws-textinput'type="text" name="total" id="total" value="0" readonly=""/></td>
</tr>
</table></center>
<center>
<div class='mws-button-row'>
				<input type="button" name="ok" id="done" value="Confirm" class='mws-button red'/>
				<input type="reset" name="reset" value="Reset"  class='mws-button gray'/>
</div>
<div id="demo" style="visibility:hidden" ></div>

</body>
</html>
