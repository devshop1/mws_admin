<?php

	include("conectivity/cone.php");
	$city_name=$_POST['city_name'];	
	$sql="insert into city(city_name)values('$city_name')";
	if(mysql_query($sql))
	{
	
	   echo"inserted";
	   
	 }
	 else
	 {
	 
	    echo"error";
	 }  
	
?>