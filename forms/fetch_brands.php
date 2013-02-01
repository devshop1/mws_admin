<?php 

    include("conectivity/cone.php");

	$item_name=$_POST['item_name'];

 $sql="select brand_name,brand_code from brand_master where item_name='$item_name'";
 $result = mysql_query($sql);
	echo "<table border='1' cellpadding='5' style='color:#CCCCCC'>"; 
	$i=0;
 	while($row = mysql_fetch_assoc($result))
	{
            //echo "$row[0]";
			echo "<tr><td id='$i' onclick='get_item_values(this.id)'>".$row['brand_name']."</td>"."<td id='$i-$i' onclick='get_item_values(this.id)'>".$row['brand_code']."</td></tr>";
			$i++;
    }
	echo "<tr><td colspan='2'><input class='modalCloseImg simplemodal-close' type='button' name='b1' value='OK' id='btn-close'
			onclick='fetch_item_details()' /></td></tr></table>"; 


?>