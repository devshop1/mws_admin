<?php

	include("conectivity/cone.php");
	$str='';
	$sql="select name from broker";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{
		$str.=$row['name'].',';

	}
echo "$str";

?>