<?php

	include("conectivity/cone.php");
	
	$sql="select group_code from item_master";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{
		echo "\n".$row['group_code'];
	}
?>