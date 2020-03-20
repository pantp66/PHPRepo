<?php
$num=$_POST['num'];
$sum=0;
$rem=0;
if(is_numeric($num)){
for($i=0;$i<=strlen($num);$i++)
{
    $rem=$num%10;
    $sum=$sum+$rem;
    $num=$num/10;
}
}
echo $sum;

?>
<body>
<h1>PHP -Sum of Digits</h1>
<form action="" method="post">
<input type="text" name="num" required="required" value=""/> <b> Enter number to get sum of dights</b>
<input type="submit" value="check"/>

</form>
</body>
