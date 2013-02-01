<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">

 $(document).ready(function() {
	   
	   	/* here "click_me" is the id of the button that's why I have used # sign to access an element from his id */
	     $("#billdt").change(function(){
	     	var name=document.getElementById("billdt").value;
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/dt.php",{js_name:name},function(responseText){  
				document.getElementById("day").value=responseText;
				       
          });
       });
	   
	   $('#brand_name1').click(function (e) {
								//	  alert(1)
		$('#basic-modal-content').modal();
	});
     
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
			
			$( "#cust_name" ).autocomplete({
				source: suplier
			});
		});	


		 
	   	/* here "click_me" is the id of the button that's why I have used # sign to access an element from his id */
	      $( "#cust_name" ).bind( "autocompletechange", function() {
	     	var name=document.getElementById("cust_name").value;
	     	/* here "demo" is the id of the div element where u want to write response */
			if(name=='')
			{
			}
			else
			{
				$("#demo").load("forms/cust.php",{js_name:name},function(responseText){  
					var str=responseText;
					
					var str1=str.split(",");
					document.getElementById("addr").value=str1[0];
					document.getElementById("contact").value=str1[1];
					document.getElementById("sale_dis").value=str1[2];
					document.getElementById("sch1").value=str1[3];
					document.getElementById("sch2").value=str1[4];
	
			  });
			}
       });
	  
	});   
	

function sale_cal()
{
var qty1=document.getElementById("sale_qty").value;
var rt=document.getElementById("sale_rt").value;
var qty2=document.getElementById("sale_qty1").value;
var rt1=document.getElementById("sale_rt1").value;
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
document.getElementById("sale_amnt").value=amnt;
var tax=document.getElementById("sale_vat").value;
var dis_per=document.getElementById("sale_dis").value;
var dis_amnt=amnt*dis_per/100;
dis_amnt=Math.round(dis_amnt*Math.pow(10,2))/Math.pow(10,2);
var dis_total=amnt-dis_amnt;
document.getElementById("dis_amnt").value=dis_amnt;

var taxamnt=dis_total*tax/100;
taxamnt=Math.round(taxamnt*Math.pow(10,2))/Math.pow(10,2);
document.getElementById("tax_amnt").value=taxamnt;
var typ=document.getElementById("tax_typ").value;
//alert(typ);

if(typ == "Dependon")
{

var total=dis_total+taxamnt;
document.getElementById("sale_total").value=total;

}
else
{
var total=dis_total-taxamnt;
document.getElementById("sale_total").value=total;

}

var hamali=document.getElementById("hamali").value;
var postage=document.getElementById("postage").value;
var fright=document.getElementById("fright").value;

total_last=parseInt(total)+parseInt(hamali)+parseInt(postage)+parseInt(fright);
//alert(total_last);
document.getElementById("sale_total").value=total_last;

var dis_last=document.getElementById("dis1").value;

var final_dis=total_last*dis_last/100;
document.getElementById("amnt").value=final_dis;
var total2=total_last-final_dis;
document.getElementById("sale_total").value=Math.round(total2);

}


function sale_cal3()
{

var tot=document.getElementById("sale_total").value;
var rec=document.getElementById("recv").value;
var bal=tot-rec;
document.getElementById("balance").value=bal;
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
		document.getElementById("brand_name1").value=item_name;
		document.getElementById("brand_code1").value=item_code;
		//event.preventDefault();
		//$.modal.close();
	}
	
	function fetch_item_details()
	{
		var code=document.getElementById("brand_code1").value;
		//alert(name);
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/shw_unit.php",{js_code:code},function(responseText){  
				var str_unit=responseText;
				
				var str1_unit=str_unit.split(",");
	              var unit_str="1".concat(" ",str1_unit[0]);
				  var unit_str1=unit_str.concat("=",str1_unit[2],str1_unit[1]);
				  document.getElementById("shw_unit").value=unit_str1;
                  document.getElementById("mrp1").value=str1_unit[3];
				  document.getElementById("sale_vat").value=str1_unit[4];
				  //alert("---->|"+str1_unit[5]+"|<-----");
				  document.getElementById("tax_typ").value=str1_unit[5];
				  document.getElementById("sale_rt").value=str1_unit[6];
				  document.getElementById("sale_rt1").value=str1_unit[7];
				  
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
	     function update_sale()
		 {	
		 	//alert(1);
	     	var billno=document.getElementById("billno").value;
			if(billno=='')
			{
			}
			else
			{
	     	/* here "demo" is the id of the div element where u want to write response */
				$("#demo").load("forms/sale_up1.php",{js_name:billno},function(responseText){  
				   // alert(responseText);
					if(responseText.indexOf("new")!=-1)
					{
						query_type="new";
						
					}
					else
					{
						query_type="update";
						var str=responseText;
						var str1=str.split(",");
						
					document.getElementById("billno").value=str1[0];
					document.getElementById("billdt").value=str1[1];
					document.getElementById("day").value=str1[31];
					document.getElementById("cust_name").value=str1[2];
					//document.getElementById("addr").value=str1[4];
					//document.getElementById("contact").value=str1[6];
					document.getElementById("mod").value=str1[3];
					document.getElementById("broker_name").value=str1[4];
					document.getElementById("brand_name1").value=str1[6];
					document.getElementById("brand_code1").value=str1[5];
					document.getElementById("mrp1").value=str1[7];
					document.getElementById("sale_qty").value=str1[8];
					document.getElementById("sale_qty1").value=str1[9];
					document.getElementById("sale_rt").value=str1[10];
					document.getElementById("sale_rt1").value=str1[11];
					document.getElementById("sale_amnt").value=str1[12];
					document.getElementById("tax_typ").value=str1[13];
					document.getElementById("sale_vat").value=str1[14];
					document.getElementById("tax_amnt").value=str1[15];
					document.getElementById("sch1").value=str1[16];
					document.getElementById("sch2").value=str1[17];
					document.getElementById("sale_dis").value=str1[18];
					document.getElementById("dis_amnt").value=str1[19];
					document.getElementById("hamali").value=str1[20];
					document.getElementById("postage").value=str1[21];
					document.getElementById("fright").value=str1[22];
					document.getElementById("charges").value=str1[23];
					document.getElementById("add_less").value=str1[24];
					document.getElementById("other").value=str1[25];
					document.getElementById("dis1").value=str1[26];
					document.getElementById("amnt").value=str1[27];
					document.getElementById("sale_total").value=str1[28];
					document.getElementById("recv").value=str1[29];
					document.getElementById("balance").value=str1[30];
					

					
					
					
					}
			  })
			}		  
		  
		       	$("#done").click(function(){
				   alert("ok");
	     	
        	     	var billno=document.getElementById("billno").value;
					var billdt=document.getElementById("billdt").value;
					var day=document.getElementById("day").value;
					var cust_name=document.getElementById("cust_name").value;
					//document.getElementById("addr").value=str1[4];
					//document.getElementById("contact").value=str1[6];
					var mod=document.getElementById("mod").value;
					var broker=document.getElementById("broker_name").value;
					var brand_name1=document.getElementById("brand_name1").value;
					var brand_code1=document.getElementById("brand_code1").value;
					var mrp1=document.getElementById("mrp1").value;
					var sale_qty=document.getElementById("sale_qty").value;
					var sale_qty1=document.getElementById("sale_qty1").value;
					var sale_rt=document.getElementById("sale_rt").value;
					var sale_rt1=document.getElementById("sale_rt1").value;
					var sale_amnt=document.getElementById("sale_amnt").value;
					var tax_typ=document.getElementById("tax_typ").value;
					var sale_vat=document.getElementById("sale_vat").value;
					var tax_amnt=document.getElementById("tax_amnt").value;
					var sch1=document.getElementById("sch1").value;
					var sch2=document.getElementById("sch2").value;
					var sale_dis=document.getElementById("sale_dis").value;
					var dis_amnt=document.getElementById("dis_amnt").value;
					var hamali=document.getElementById("hamali").value;
					var postage=document.getElementById("postage").value;
					var fright=document.getElementById("fright").value;
					var charges=document.getElementById("charges").value;
					var add_less=document.getElementById("add_less").value;
					var other=document.getElementById("other").value;
					var dis1=document.getElementById("dis1").value;
					var amnt=document.getElementById("amnt").value;
					var sale_total=document.getElementById("sale_total").value;
					var recv=document.getElementById("recv").value;
					var balance=document.getElementById("balance").value;
			  
			
			
	     	/* here "demo" is the id of the div element where u want to write response */
			$("#demo").load("forms/sale_up2.php",{query_type:query_type,billno:billno,billdt:billdt,day:day,cust_name:cust_name,mod:mod,broker:broker,brand_name1:brand_name1,brand_code1:brand_code1,mrp1:mrp1,sale_qty:sale_qty,sale_qty1:sale_qty1,sale_rt:sale_rt,sale_rt1:sale_rt1,sale_amnt:sale_amnt,tax_typ:tax_typ,sale_vat:sale_vat,tax_amnt:tax_amnt,sch1:sch1,sch2:sch2,sale_dis:sale_dis,dis_amnt:dis_amnt,hamali:hamali,postage:postage,fright:fright,charges:charges,add_less:add_less,other:other,dis1:dis1,amnt:amnt,sale_total:sale_total,recv:recv,balance:balance},function(responseText){  
				alert(responseText)
				
          });
                  
       });
	 
	}  
                
            	
     
				


</script>

</head>

<body>	
<div id="basic-modal-content_broker" style="height:400px;width:400px;padding-left:300px">
  <?php
           include("../forms/broker_details.php");
  
  ?>
  
</div>		
		<div id="basic-modal-content" style="height:200px;width:400px;padding-left:300px">
				<table border="1" cellpadding="2" style="color:#CCCCCC">
						<?php
						include("conectivity/cone.php");
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
							<input type="button" value="Ok" id="btn-close"/>
					</td>
				</tr>
			</table>	
		</div>



<table  style="border-spacing:10px;border-collapse:separate;width:780px;padding:20px">
<td>Bill_no</td>
<td><input class='mws-textinput' type="text" name="billno" id="billno"  onchange="update_sale();" /></td>
<td>Date</td>
<td><input class='mws-textinput' type="text" name="billdt" id="billdt" /></td>
<td>Day</td>
<td><input class='mws-textinput' type="text" name="day" id="day"  /></td>
</tr>
<tr>
<td>Customer</td>
<td><input class='mws-textinput' type="text" name="cust_name" id="cust_name" /></td>
<td>Address</td>
<td><input class='mws-textinput' type="text" name="addr" id="addr" /></td>
<td>contact1</td>
<td><input class='mws-textinput' type="text" name="contact" id="contact" /></td>
</tr>
<tr>
<td>Payment_mode</td>
<td><select name="mod" id="mod"><option>Credit</option><option>Cash</option></select></td>
<td>Broker</td>
<td><input class='mws-textinput' type="text" name="broker" id="broker_name"/></td>
<td><input type="button" name="b" value="Add_New Broker" id="new_broker" class="basic"/></td>

</tr>
<tr><td>Brand_name</td>
<td>
<input class='mws-textinput' type="text" name="brand_name1" id="brand_name1" class="basic"/></td>
<td>Brand_code</td>
<td><input class='mws-textinput' type="text" name="brand_code1" id="brand_code1" /></td>

</tr>
<tr>
<td>MRP</td>
<td><input class='mws-textinput' type="text" name="mrp1" id="mrp1" value="0" onchange="sale_cal();" /></td><td></td>
<td><input class='mws-textinput' type="text" name="shw_unit" id="shw_unit" readonly=""  /></td>
</tr>
<tr>
<td>Qty</td>
<td><input class='mws-textinput' type="text" name="sale_qty" id="sale_qty" value="0"  onchange="sale_cal();"  /></td>
<td>Qty1</td>
<td><input class='mws-textinput' type="text" name="sale_qty1" id="sale_qty1"  value="0" onchange="sale_cal();" /></td>
<td>Rate</td>
<td><input class='mws-textinput' type="text" name="sale_rt" id="sale_rt"  value="0" onchange="sale_cal();"/></td>
<td>Rate1</td>
<td><input class='mws-textinput' type="text" name="sale_rt1" id="sale_rt1"  value="0" onchange="sale_cal();"/></td>

</tr>
<tr>
<td>Amount</td>
<td><input class='mws-textinput' type="text" name="sale_amnt" id="sale_amnt"  value="0" readonly=""/></td>
<td>Tax_type</td>

<td><select name="tax_typ" id="tax_typ" onchange="sale_cal();" >
<option value="Dependon">Dependon</option><option value="Inclusive">Inclusive</option></select></td></tr>

<tr>

<td>S.tax</td>

<td><input class='mws-textinput' type="text" name="sale_vat" id="sale_vat" value="0" onchange="sale_cal();" /></td>

<td>Tax_amount</td>

<td><input class='mws-textinput' type="text" name="tax_amnt" id="tax_amnt"  value="0" readonly=""/></td>

<td>Scheme1</td>

<td><input class='mws-textinput' type="text" name="sch1" id="sch1" value="0"/></td>
<td>Scheme2</td>
<td><input class='mws-textinput' type="text" name="sch2" id="sch2" value="0"/></td>
</tr>
<tr>
<td>dis_per %</td>
<td><input class='mws-textinput' type="text" name="sale_dis" id="sale_dis"  value="0" onchange="sale_cal();" /></td>
<td>dis_amount</td>
<td><input class='mws-textinput' type="text" name="dis_amnt" id="dis_amnt"  value="0" readonly=""/></td>

</tr>
<tr>
<td>Hamali</td>
<td><input class='mws-textinput' type="text" name="hamali" id="hamali" value="0" onchange="sale_cal();" /></td>

<td>Postage</td>
<td><input class='mws-textinput' type="text" name="postage" id="postage" value="0" onchange="sale_cal();"/></td>

<td>Fright</td>
<td><input class='mws-textinput' type="text" name="fright" id="fright" value="0"onchange="sale_cal();"  /></td>
</tr>
<tr>

<td><select name="charges" id="charges"><option>Add</option><option>Less</option></select></td>

<td><input class='mws-textinput' type="text" name="add_less" id="add_less" /></td>

<td>Other a/c</td>

<td><input class='mws-textinput' type="text" name="other" id="other" value="0"/></td>

</tr>

<tr>

<td>Dis_per</td>

<td><input class='mws-textinput' type="text" name="dis1" id="dis1"  value="0" onchange="sale_cal();"/></td>

<td>dis_amount</td>

<td><input class='mws-textinput' type="text" name="amnt" id="amnt"  value="0" readonly=""/></td>

</tr>
<tr>

<td>Total</td>

<td><input class='mws-textinput' type="text" name="sale_total" id="sale_total" value="0"/></td>

<td>Amount Recived</td>

<td><input class='mws-textinput' type="text" name="recv" id="recv"  value="0" onchange="sale_cal3();"/></td>

<td>Balance</td>

<td><input class='mws-textinput' type="text" name="balance" id="balance"  value="0" readonly=""/></td>

</tr>
</table>


<div class='mws-button-row'>
			
			<input type="button" name="ok" id="done" value="Confirm" class='mws-button red'/>
	
			<input type="reset" name="reset" value="Reset"  class='mws-button gray'/>
</div>
<div id="demo" style="visibility:hidden" ></div>


</body>
</html>
