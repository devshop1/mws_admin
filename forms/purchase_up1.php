<?php 
    include("conectivity/cone.php");
	$no=$_POST['js_name'];
	$sql="select * from purchase_det where bill_no='$no'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count<0 || $count=='')
	{
		echo "new";
		
	}
	else {
	while($row = mysql_fetch_assoc($result)){
		
		echo $row['date'].",".$row['entry_id'].",".$row['bill_no'].",".$row['bill_date'].",".$row['supplier'].",".$row['payment_mode'].",".$row['broker'].",".$row['brand_code'].",".$row['brand_name'].",".$row['purchase_type'].",".$row['mrp'].",".$row['qty'].",".$row['qty1'].",".$row['rate'].",".$row['rate1'].",".$row['amount'].",".$row['tax_typ'].",".$row['vat'].",".$row['tax_amnt'].",".$row['dis_per'].",".$row['dis_amnt'].",".$row['total'].",".$row['day'];
	}
	}
?>