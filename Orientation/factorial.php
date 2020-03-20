<html>
<body>
<form  method="post">
<input type="text" name="name"/>
<input type="submit" name="OK" />
</form>
<?php
if(isset($_POST['OK'])){
$p =$_POST['name'];
$f = 1;
for ($x=1; $x<=$p; $x++)
{
  $f = $f * $x;
}
echo "Factorial of number is $f ";
}
?>
</body>
</html>