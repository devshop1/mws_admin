<?php 

    include("conectivity/cone.php");

	$code=$_POST['js_code'];

 $sql="select *from brand_master where brand_code='$code'";
 $result = mysql_query($sql);
 	while($row = mysql_fetch_assoc($result))
	{
	   echo $row['upper'].",".$row['lower'].",".$row['pcs_qty'].",".$row['mrp'].",".$row['sales_tax'].",".$row['type'].",".$row['sal'].",".$row['sal1'].",".$row['pur'].",".$row['pur1'];
  
    }
?>