<?php 
extract($_POST);
if(isset($swap))
{
	$x=$fn;
	$y=$sn;
	$z=0;


	$z=$x;
	$x=$y;
	$y=$z;


	//Print the reversed Values
	echo "<p align='center'>Now First numebr is : ". $x ."<br/>";
	echo "and Second number is : ". $y."</p>";
}
?>

<form method="post">
<table align="center">
	<tr>
		<td>Enter First number</td>
		<td><input type="text" name="fn"/></td>
	</tr>
	<tr>
		<td>Enter Second number</td>
		<td><input type="text" name="sn"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Swap Numbers" name="swap"/></td>
	</tr>
</table>
</form>