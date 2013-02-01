
<?php


$dt=$_POST['js_name'];
$arr=split("/",$dt);

echo date("l",mktime(0,0,0,$arr[1],$arr[0],$arr[2]));

?>