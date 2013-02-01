
<?php 
    include("conectivity/cone.php");
	$name=$_POST['js_name'];
	$sql="select * from salesman where name='$name'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count<0 || $count=='')
	{
		echo "new";
		
	}
	else {
	while($row = mysql_fetch_assoc($result)){
		
		echo $row['code'].",".$row['name'].",".$row['add1'].",".$row['add2'].",".$row['add3'].",".$row['city'].",".$row['phno'];
	}
	}
?>