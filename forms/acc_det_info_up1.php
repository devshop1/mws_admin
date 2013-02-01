<?php 
    include("conectivity/cone.php");
	$gr_type=$_POST['gr_type'];
	$sql="select * from acc_det_information where gr_type='$gr_type'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count<0 || $count=='')
	{
		echo "new";
		
	}
	else {
	while($row = mysql_fetch_assoc($result)){
		
		echo $row['short_name'].",".$row['add1'].",".$row['city'].",".$row['phno'].",".$row['telex'].",".$row['gram'].",".$row['mst_no'].",".$row['cst_no'].",".$row['other'].",".$row['bank'].",".$row['bank_acc'].",".$row['propritor'].",".$row['propritor1'].",".$row['bazar_day'].",".$row['disc'].",".$row['scheme1'].",".$row['scheme2'];
	}
	}
?>