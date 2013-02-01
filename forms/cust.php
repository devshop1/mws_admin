<?php 

    include("conectivity/cone.php");

	$name=$_POST['js_name'];

 $sql="select *from acc_det_information where acc_name='$name'";
 $result = mysql_query($sql);
 	while($row = mysql_fetch_array($result))
	{


            echo "$row[4], $row[8], $row[21], $row[22] ,$row[23]";
  
    }
?>