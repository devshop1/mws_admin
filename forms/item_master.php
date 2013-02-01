<?php
if(isset($_POST['b']))
{
    include("conectivity/cone.php");
     $code=$_POST['code'];
	 $name=$_POST['name'];
	 $open=$_POST['open'];
	 $close=$_POST['close'];
	 $purchase=$_POST['pur'];
	 $sale=$_POST['sale'];
	 $exp1=$_POST['exp1'];
	 $exp2=$_POST['exp2'];
	 $exp3=$_POST['exp3'];
	 $inc1=$_POST['inc1'];
     $total1=$_POST['total1'];
	 $total2=$_POST['total2'];
	 $upper=$_POST['upper'];
	 $lower=$_POST['lower']; 
	 
    $sql="insert into item_master(group_code,group_name,opening,sales,purchase,closing,exp1,exp2,exp3,inc1,total1,total2,upper_unit,lower_unit)values('$code','$name','$open','$sale','$purchase','$close','$exp1','$exp2','$exp3','$inc1','$total1','$total2','$upper','$lower')";
	 
	 if (mysql_query($sql,$con))
	  {
	
	   echo " data added succssesfully..";
	 
	 }
	else
	  {
	 echo "Error : " . mysql_error();
	
	  }

	
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script type="text/javascript">
			function my_func()
			{
				var nam=document.getElementById("name").value;
			document.getElementById("d1").innerHTML="<table style='border-spacing:10px;border-collapse:separate;width:750px;background-color:#E0E9E9;border-radius:10px;padding:20px;width:90%'><tr><td>"+nam+" Opening</td> <td><input type='text' name='open' id='open' value='0.00' class='mws-textinput'/></td><td>"+nam+" Sales</td> <td><input class='mws-textinput' type='text' name='sale' id='sale' value='0.00' /></td></tr><tr><td>"+nam+" Purchase</td><td><input class='mws-textinput' type='text' name='pur' id='pur' value='0.00' /></td><td>"+nam+" Closing</td><td><input class='mws-textinput' type='text' name='close' id='close' value='0.00' /></td></tr><tr><td>"+nam+" Exp(1) A/c</td><td><input type='text' name='exp1' id='exp1' value='0.00' class='mws-textinput'/></td><td>"+nam+" Inc(1) A/c</td><td><input class='mws-textinput' type='text' name='inc1' id='inc1' value='0.00' /></td></tr><tr><td>"+nam+" Purchase return</td><td><input class='mws-textinput' type='text' name='exp2' id='exp2' value='0.00' /></td><td>"+nam+" Sales Return</td><td><input class='mws-textinput' type='text' name='exp3' id='exp3' value='0.00'/></td></tr></table>";
			
			}
			</script>

</head>

<body>
<form style="padding:30px;padding-left:50px" action="item_master.php" method="post">
<table style="border-spacing:10px;border-collapse:separate;width:350px;margin-bottom:0px">
<tr>
<td><label>Group Code</td></label>
<td><input type="text" name="code" id="code"  class='mws-textinput'/></td>
<td><label>Group Name</td></label>
<td><input type="text" name="name" id="name"  onChange="my_func()"  class='mws-textinput'/></td>
</tr>
</table>

<div id="d1" style="position:relative;top:10px;">
<table style="border-spacing:10px;border-collapse:separate;width:350px;background-color:#E0E9E9;border-radius:10px;padding:20px;width:90%">
<tr>
<td><label>Opening </td></label>
<td><input type="text" name="open" id="open" value="0.00" class='mws-textinput'/></td>

<td><label>Sales</label></td></label>
<td><input type="text" name="sale" id="sale" value="0.00" class='mws-textinput'/></td>
</tr>
<tr>
<td><label>Purchase</td></label>
<td><input type="text" name="pur" id="pur" value="0.00" class='mws-textinput'/></td>

<td><label>Closing</td></label>
<td><input type="text" name="close" id="close" value="0.00" class='mws-textinput'/></td>
</tr>
<tr>
<td><label>Exp(1) A/c</td></label>
<td><input type="text" name="exp1" id="exp1" value="0.00" class='mws-textinput'/></td>

<td><label>Inc(1) A/c</td></label>
<td><input type="text" name="inc1" id="inc1" value="0.00" class='mws-textinput'/></td>
</tr>
<tr>
<td><label>Purchase return</td></label>
<td><input type="text" name="exp2" id="exp2" value="0.00" class='mws-textinput'/></td>

<td><label>Sales Return</td></label>
<td><input type="text" name="exp3" id="exp3" value="0.00" class='mws-textinput'/></td>

</tr>
</table>
</div>

<table style="border-spacing:10px;border-collapse:separate;width:780px;padding:20px">
<tr>
<td><label>Total</td></label>
<td><input type="text" name="total1" id="total1" value="0.00" class='mws-textinput'/></td>

<td><label>Total </td></label>
<td><input type="text" name="total2" id="total2" value="0.00" class='mws-textinput'/></td>
</tr>

<tr>
<td><label>Upper_unit</td></label>
<td><input type="text" name="upper" id="upper"  class='mws-textinput'/></td>

<td><label>Lower_unit</td></label>
<td><input type="text" name="lower" id="lower"  class='mws-textinput'/></td>
</tr>
</table>
</form>
<div class='mws-button-row'>
				<input type="submit" name="b" value="Submit" class='mws-button red'/>
				<input type="reset" name="reset" value="Reset"  class='mws-button gray'/>
</div>
</body>
</html>
