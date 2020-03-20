<?php


function Reverse($str){
    $s = $_POST['$str'];

	for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++)
	{
		$temp = $str[$i];
		$str[$i] = $str[$j];
		$str[$j] = $temp;
	}
	echo $str;
}

if($_POST){
$rev=Reverse($s);
echo $rev;
}
?>

<html>
<body>
<h1>PHP -Reverese String</h1>
<form method="post">
 Enter the Number:
   <input type="Text" name="str" >
   <input type="submit" value="Submit">
  </form>
</body>
</html>