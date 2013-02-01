<?php 
    include("conectivity/cone.php");
	$bill_no=$_POST['bill_no'];
	$sql="delete from purchase_det where bill_no='$bill_no'";
	
  if(mysql_query($sql))
	{
		echo "Deleted Purchase Account...";
		
	}
	else {
	
	echo"error";
	
	}
?>