<?php

	include("conectivity/cone.php");
	$str='';
	$sql="select group_name from item_master";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{
	$str.=$row['group_name'].',';
	}
	echo "$str";
?>