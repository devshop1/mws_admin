<?php 

    include("conectivity/cone.php");

	$name=$_POST['js_name'];

 $sql="select *from item_master where group_name='$name'";
 $result = mysql_query($sql);
 	while($row = mysql_fetch_array($result))
	{


            echo "$row[0]";
  
    }
?>