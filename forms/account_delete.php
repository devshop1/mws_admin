<?php 
    include("conectivity/cone.php");
	$gr_type=$_POST['gr_type'];
	$sql="delete from acc_det_information where gr_type='$gr_type'";
	
  if(mysql_query($sql))
	{
		echo "Deleted Account...";
		
	}
	else {
	
	echo"error";
	
	}
?>