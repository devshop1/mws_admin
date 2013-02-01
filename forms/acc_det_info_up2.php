<?php 

     include("conectivity/cone.php");
	 
	$type=$_POST['query_type'];
	$gr_no=$_POST['gr_no'];
	$gr_type=$_POST['gr_type'];
	$name=$_POST['name'];
	$add=$_POST['add'];
	$city=$_POST['city'];
	$phno=$_POST['phno'];
	$shr_nm=$_POST['shr_nm'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$cst=$_POST['cst'];
	$tin=$_POST['tin'];
	$pan=$_POST['pan'];
	$person1=$_POST['person1'];
	$person2=$_POST['person2'];
	$bank_name=$_POST['bank_name'];
	$bank_no=$_POST['bank_no'];
	$bazar_day=$_POST['bazar_day'];
	$dis=$_POST['dis'];
	$scheme1=$_POST['scheme1'];
    $scheme2=$_POST['scheme2'];	
	    
	if($type=="new")
	{
	//echo"newwwwww";

$sql="insert into acc_det_information(acc_code,gr_type,acc_name,short_name,add1,city,phno,telex,gram,mst_no,cst_no,other,bank,bank_acc,propritor,propritor1,bazar_day,disc,scheme1,scheme2)values('$gr_no','$gr_type','$name','$shr_nm','$add','$city','$phno','$fax','$email','$tin','$cst','$pan','$bank_name','$bank_no','$person1','$person2','$bazar_day','$dis','$scheme1','$scheme2')";

		if (mysql_query($sql,$con))
	  {
	
	   echo "New Account data added succssesfully..";
	 
	 }
	else
	  {
	 echo "Error : " . mysql_error();
	
	  }
	}
	else {
	 
	 $sql="UPDATE acc_det_information SET acc_code='$gr_no',acc_name='$name',short_name='$shr_nm',add1='$add',city='$city',phno='$phno',telex='$fax',gram='$email',mst_no='$tin',cst_no='$cst',other='$pan',bank='$bank_name',bank_acc='$bank_no',propritor='$person1',propritor1='$person2',bazar_day='$bazar_day',disc='$dis',scheme1='$scheme1',scheme2='$scheme2' WHERE gr_type=$gr_type";
	 
	 if(mysql_query($sql,$con))
	 {
	    echo"updated";
	 }
	 else
	  {
	 echo "Error : " . mysql_error();
	
	  }
	 
	 
	}
	
	
?>