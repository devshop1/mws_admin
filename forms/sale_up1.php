<?php 
    include("conectivity/cone.php");
	$no=$_POST['js_name'];
	$sql="select * from sale_det where bill_no='$no'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count<0 || $count=='')
	{
		echo "new";
		
	}
	else {
	while($row = mysql_fetch_assoc($result)){
		
		echo $row['bill_no'].",".$row['date'].",".$row['customer'].",".$row['payment_mode'].",".$row['broker'].",".$row['brand_code'].",".$row['brand_name'].",".$row['mrp'].",".$row['qty'].",".$row['qty1'].",".$row['rate'].",".$row['rate1'].",".$row['amount'].",".$row['tax_type'].",".$row['s_tax'].",".$row['tax_amnt'].",".$row['scheme1'].",".$row['scheme2'].",".$row['dis_per'].",".$row['dis_amnt'].",".$row['hamali'].",".$row['postage'].",".$row['fright'].",".$row['add_less'].",".$row['acc_no'].",".$row['other'].",".$row['dis_per1'].",".$row['dis_amount1'].",".$row['total'].",".$row['recived'].",".$row['balance'].",".$row['day'];
	}
	}
?>