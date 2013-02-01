<?php 

      include("conectivity/cone.php");
	$type=$_POST['query_type'];
	$code=$_POST['b_code'];
	$name=$_POST['b_name'];
	$add1=$_POST['b_add1'];
	$add2=$_POST['b_add2'];
	$add3=$_POST['b_add3'];
	$phno=$_POST['b_phno'];
	$city=$_POST['city'];
	$brate=$_POST['b_brate'];
   //echo $code;
	if($type=="new")
	{
	$sql="insert into broker(code,name,add1,add2,add3,city,phno,brate) values('$code','$name','$add1','$add2','$add3','$city','$phno','$brate')";

		if (mysql_query($sql,$con))
	  {
	
	   echo "New broker data added succssesfully..";
	 
	 }
	else
	  {
	 echo "Error : " . mysql_error();
	
	  }
	}
	else {
	 
	 $sql="UPDATE broker SET code='$code',add1='$add1',add2='$add2',add3='$add3',phno='$phno',city='$city',brate='$brate' 
	 WHERE name='$name'";
	 if(mysql_query($sql,$con))
	 {
	    echo"updated";
	 }
	 
	 
	}
	
	
?>