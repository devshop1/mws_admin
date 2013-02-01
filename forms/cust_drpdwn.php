<?php

	include("conectivity/cone.php");
	$str='';
	$sql="select  acc_name from acc_det_information";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{
		$str.=$row['acc_name'].',';
	}
echo "$str";
?>