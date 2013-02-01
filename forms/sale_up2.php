<?php 

     include("conectivity/cone.php");
	   $type=$_POST['query_type'];
       $billno=$_POST['billno']; 
       $billdt=$_POST['billdt'];
	   $cust=$_POST['cust_name'];
	   $mode=$_POST['mod'];
	   $broker=$_POST['broker'];
       $brand_code=$_POST['brand_code1'];
	   $brand_name=$_POST['brand_name1'];
	   $mrp=$_POST['mrp1'];
	   $qty=$_POST['sale_qty'];
	   $qty1=$_POST['sale_qty1'];
	   $rate=$_POST['sale_rt'];
	   $rate1=$_POST['sale_rt1'];
       $amount=$_POST['sale_amnt'];
	   $tax_typ=$_POST['tax_typ'];
	   $vat=$_POST['sale_vat'];
	   $tax_amnt=$_POST['tax_amnt'];
	   $sch1=$_POST['sch1'];
	   $sch2=$_POST['sch2'];
	   $sale_dis=$_POST['sale_dis'];
	   $dis_amnt=$_POST['dis_amnt'];
	   $hamali=$_POST['hamali'];
	   $postage=$_POST['postage'];
	   $fright=$_POST['fright'];
	   $charges=$_POST['charges'];
	   $add_less=$_POST['add_less'];
	   $other=$_POST['other'];
	   $dis1=$_POST['dis1'];
	   $amnt=$_POST['amnt'];
	   $sale_total=$_POST['sale_total'];
	   $recv=$_POST['recv'];
	   $balance=$_POST['balance'];
	   $day=$_POST['day'];
	   
	if($type=="new")
	{
	
	   $sql="insert into sale_det(bill_no,date,customer,payment_mode,broker,brand_code,brand_name,mrp,qty,qty1,rate,rate1,amount,tax_type,s_tax,tax_amnt,scheme1,scheme2,dis_per,dis_amnt,hamali,postage,fright,add_less,acc_no,other,dis_per1,dis_amount1,total,recived,balance,day)values('$billno','$billdt','$cust','$mode','$broker','$brand_code','$brand_name','$mrp','$qty','$qty1','$rate','$rate1','$amount','$tax_typ','$vat','$tax_amnt','$sch1','$sch2','$sale_dis','$dis_amnt','$hamali','$postage','$fright','$charges','$add_less','$other','$dis1','$amnt','$sale_total','$recv','$balance','$day')";

		if (mysql_query($sql,$con))
	  {
	
	   echo "New sales data added succssesfully..";
	 
	 }
	else
	  {
	 echo "Error : " . mysql_error();
	
	  }
	}
	else {
	 
	 $sql="UPDATE sale_det SET date='$billdt',customer='$cust',payment_mode='$mode',broker='$broker',brand_code='$brand_code',brand_name='$brand_name',mrp='$mrp',qty='$qty',qty1='$qty1',rate='$rate',rate1='$rate1',amount='$amount',tax_type='$tax_typ',s_tax='$vat',tax_amnt='$tax_amnt',scheme1='$sch1',scheme2='$sch2',dis_per='$sale_dis',dis_amnt='$dis_amnt',hamali='$hamali',postage='$postage',fright='$fright',add_less='$charges',acc_no='$add_less',other='$other',dis_per1='$dis1',dis_amount1='$amnt',total='$sale_total',recived='$recv',balance='$balance',day='$day'
	 WHERE bill_no=$billno";
	 
	 if(mysql_query($sql,$con))
	 {
	    echo"updated";
	 }
	 
	 
	}
	
	
?>