
<?php 
    include("conectivity/cone.php");
	$name=$_POST['s_name'];
	$sql="delete from salesman where name='$name'";
	
  if(mysql_query($sql))
	{
		echo "deleted salesman";
		
	}
	else {
	
	echo"error";
	
	}
?>