<?php 

     include("conectivity/cone.php");
	   $type=$_POST['query_type'];
       $date=$_POST['date'];
       $entry=$_POST['entry_id'];
	   $bill_no=$_POST['bill_no']; 
       $date1=$_POST['bill_dt'];
	   $sup=$_POST['sup_name'];
	   $mode=$_POST['mod'];
	   $broker=$_POST['broker'];
       $brand_code=$_POST['brand_code'];
	   $brand_name=$_POST['brand_name'];
	   $purchase_type=$_POST['typ'];
	   $mrp=$_POST['mrp'];
	   $qty=$_POST['qty'];
	   $qty1=$_POST['qty1'];
	   $rate=$_POST['rt'];
	   $rate1=$_POST['rt1'];
	   $amount=$_POST['amnt'];
	   $dis=$_POST['dis'];
	   $vat=$_POST['vat'];
	   $dis_amnt=$_POST['dis_amnt'];
	   $tax_amnt=$_POST['tax_amnt'];
	   $tax_typ=$_POST['tax_typ'];
	   $total=$_POST['total'];
	   $day=$_POST['day'];
	   
	if($type=="new")
	{
	//echo"$entry";
$sql="insert into purchase_det(date,entry_id,bill_no,bill_date,supplier,payment_mode,broker,brand_code,brand_name,purchase_type,mrp,qty,qty1,rate,rate1,amount,dis_per,tax_typ,vat,dis_amnt,tax_amnt,total,day)values('$date','$entry','$bill_no','$date1','$sup','$mode','$broker','$brand_code','$brand_name','$purchase_type','$mrp','$qty','$qty1','$rate','$rate1','$amount','$dis','$tax_typ','$vat','$dis_amnt','$tax_amnt','$total','$day')";

		if (mysql_query($sql,$con))
	  {
	
	   echo "New Purchase data added succssesfully..";
	 
	 }
	else
	  {
	 echo "Error : " . mysql_error();
	
	  }
	}
	else {
	 
	 $sql="UPDATE purchase_det SET date='$date',entry_id='$entry',bill_date='$date1',supplier='$sup',payment_mode='$mode',broker='$broker',brand_code='$brand_code',brand_name='$brand_name',mrp='$mrp',qty='$qty',qty1='$qty1',rate='$rate',rate1='$rate1',amount='$amount',tax_typ='$tax_typ',vat='$vat',tax_amnt='$tax_amnt',dis_per='$dis',dis_amnt='$dis_amnt',total='$total',day='$day'
	 WHERE bill_no=$bill_no";
	 
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