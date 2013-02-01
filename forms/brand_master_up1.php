<?php 
    include("conectivity/cone.php");
	$str='';
	$no=$_POST['js_code'];
	$sql="select * from brand_master where brand_code='$no'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	
	if($count<0 || $count=='')
	{
		echo "new";
		
	}
	else {
	while($row = mysql_fetch_assoc($result)){
		
		//$item_name=str_replace("\n","",$row['item_name']);
		//echo "----".$row['item_name'];
		$str.=$row['item_name'].",".$row['op_bal_dr'].",".$row['op_bal_cr'].",".$row['op_bal_pcs'].",".$row['op_bal'].",".$row['brand_code'].",".$row['brand_name'].",".$row['op_amnt'].",".$row['inventory_control'].",".$row['upper'].",".$row['lower'].",".$row['qty1'].",".$row['qty2'].",".$row['ul'].",".$row['pcs_qty'].",".$row['mrp'].",".$row['sales_tax'].",".$row['type'].",".$row['hamali'].",".$row['tolai'].",".$row['pur'].",".$row['sal'].",".$row['pur1'].",".$row['sal1'];
	}
	}
	echo "$str";
?>