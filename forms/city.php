<?php

	include("conectivity/cone.php");
		$str='';
	$sql="select city_name from city";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{
		$str.=$row['city_name'].',';
	}
	echo "$str";
?>