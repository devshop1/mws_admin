<?php require_once '../connection/con1.php';
//con1;
$bsno=$_POST['bsno'];
$in_out=$_POST['in_out'];
$asset_heading=$_POST['asset_heading'];
$schd=$_POST['schd'];
$grp_type=$_POST['grp_type'];

$sql="insert into group_master(BSNO,IN_OUT,ASSET_HEADING,SCHD,GROUP_NAME) values ('$bsno','$in_out','$asset_heading','$schd','$grp_type')";

$result=mysql_query($sql);

if($result)
{
	echo "Success";
}
else
{
	echo "$sql";
}
?>