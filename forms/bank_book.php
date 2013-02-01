<?php
if(isset($_POST['b']))
{
    include("conectivity/cone.php");
       $date=$_POST['date'];
	   $v_no=$_POST['v_no'];
	   $b_code=$_POST['b_code'];
	   $a_name=$_POST['a_name'];
	   $o_bal=$_POST['o_bal'];
	   $debit=$_POST['debit'];
	   $credit=$_POST['credit'];
	   $balance=$_POST['balance'];
	   $receipt=$_POST['receipt'];
	   $payment=$_POST['payment'];
	   $ac_code=$_POST['a_code'];
	   $chq_no=$_POST['chq_no'];
   	   $withdraw=$_POST['withdraw'];
	   $deposited=$_POST['deposited'];
	   $narration=$_POST['narration'];
	   

$sql="insert into bank_book(date,v_no,b_code,a_name,o_bal,debit,credit,balance,receipt,payment,ac_code,chq_no,withdraw,deposited,narration)values('$date','$v_no','$b_code','$a_name','$o_bal','$debit','$credit','$balance','$receipt','$payment','$ac_code','$chq_no','$withdraw','$deposited','$narration')";

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
</head>

<body>
<form action="bank_book.php" method="post">
<div style="padding:40px">
<table style="border-spacing:10px;border-collapse:separate;width:580px;">
<tr>
<td>Date</td><td><input class='mws-textinput' type="text" name="date" id="date" /></td><td>&nbsp;</td>
<td>Voucher No.</td><td><input class='mws-textinput' type="text" name="v_no" id="v_no" /></td>
</tr>
<tr>
<td>Bank code</td><td><input class='mws-textinput' type="text" name="b_code" id="b_code" /></td><td>&nbsp;</td>
<td>Account name</td><td><input class='mws-textinput' type="text" name="a_name" id="a_name" /></td>
</tr>
</table>
<table style="border-spacing:10px;border-collapse:separate;width:580px;">
<tr>
<td>Op.Bal</td><td>&nbsp;</td><td>Total Debit</td><td>&nbsp;</td><td>Total Credit</td><td>&nbsp;</td><td>Balance</td><td>&nbsp;</td><td>Receipt</td><td>&nbsp;</td><td>Payment</td>
</tr>
<tr>
<td><input class='mws-textinput' style="width:140px" type="text" name="o_bal" id="o_bal" value="0.00" /> </td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="debit" id="debit"  value="0.00" /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="credit" id="credit" value="0.00" /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="balance" id="balance" value="0.00" /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="receipt" id="receipt"  value="0.00" /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="payment" id="payment"  value="0.00" /></td>
</tr>
<tr>
<td>A/C code</td><td>&nbsp;</td><td>Cheque No.</td><td>&nbsp;</td><td>Withdraw</td><td>&nbsp;</td><td>Deposited</td>
</tr>
<tr>
<td><input class='mws-textinput' style="width:140px" type="text" name="a_code" id="a_code" /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="chq_no" id="chq_no"  /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="withdraw" id="withdraw"  /></td><td></td>
<td><input class='mws-textinput' style="width:140px" type="text" name="deposited" id="deposited"  /></td>
</tr>
</table>
<br />
<table style="border-spacing:10px;border-collapse:separate;width:100%;">
<tr><td>Narration</td></tr>
<tr>
<td><textarea name="narration" id="narration" style="width:400px"></textarea></td>
</tr>
</table>
</div>
</form>
<div class='mws-button-row'>
				<input type="submit" name="b" value="Submit" class='mws-button red'/>
				<input type="reset" name="reset" value="Reset"  class='mws-button gray'/>
</div>


</body>
</html>
