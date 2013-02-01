<?php 
    include("conectivity/cone.php");
	$brand_code=$_POST['brand_code'];
	$sql="delete from brand_master where brand_code='$brand_code'";
	
  if(mysql_query($sql))
	{
		echo "Deleted Brand...";
		
	}
	else {
	
	echo"error";
	
	}
?>