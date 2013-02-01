<?php

if(isset($_POST['b']))
{
    include("conectivity/cone.php");
	$code=$_POST['narration_no'];
	$heading=$_POST['heading'];
	$narration=$_POST['narration'];
	
	$sql="insert into narration(narration_no,heading,narration)values('$code','$heading','$narration')";

if (mysql_query($sql,$con))
	  {
	
	   echo "New narration data added succssesfully..";
	 
	 }
	else
	  {
	 echo "Error : " . mysql_error();
	
	  }

}	


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="narattion_det.php" method="post">
<table style='border-spacing:10px;border-collapse:separate;width:100%;padding:30px'>
<tr>
<td>Narration No </td><td><input type="text" name="narration_no" id="narration_no"  class='mws-textinput'/></td>
<td></td>
<td>Heading </td><td><input type="text" name="heading" id="heading" class='mws-textinput' /></td>
</tr>
<tr></tr><tr></tr>
<tr>
<td>Narration </td><td  colspan="3"><textarea name="narration" id="narration" style="width:400px"></textarea></td>
</tr>
</table>
</form>
<div class='mws-button-row'>
				<input type='submit' name='b' value='Submit' class='mws-button red'/>
				<input type='reset' name='reset' value='Reset'  class='mws-button gray'/>
</div>
</body>
</html>
