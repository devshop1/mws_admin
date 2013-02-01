<?php 
   include("conectivity/cone.php");
   $gr_code=$_POST['gr_code'];

 $sql="select gr_type,acc_name from acc_det_information where acc_code='$gr_code'";
 $result = mysql_query($sql);
	echo "<table border='1' cellpadding='5' style='color:#CCCCCC'>"; 
	$j=0;$i="a";
 	while($row = mysql_fetch_assoc($result))
	{
            //echo "$row[0]";
			echo "<tr><td id='$i$j' onclick='get_grp_values(this.id)'>".$row['gr_type']."</td>"."<td id='$i$j-$i$j' onclick='get_grp_values(this.id)'>".$row['acc_name']."</td></tr>";
			$j++;
    }
	
echo "<tr><td colspan='2'><input class='modalCloseImg simplemodal-close' type='button' name='b1' value='OK' id='btn-close'
			onclick='update_acc_info()' /></td></tr></table>"; 

	
	?>