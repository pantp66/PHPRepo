
<?php

if($_POST){
armstrongCheck();

}
function armstrongCheck()
{
$number = $_POST['number'];
$sum=0;
$x=$number;

     while($x!=0)
    {
        $sum=$x%10;
        $sum=$sum+($rem*$rem*$rem);
        $x=$x/10;
    }
    if($number == $sum)
    echo "yes $number is armstrong";
    else
    echo "Not armstron $number";
}
?>
<html>
<body>
<h1>PHP -Armstrong Number</h1>
<form method="post">
 Enter the Number:
   <input type="number" name="number">
   <input type="submit" value="Submit">
  </form>
</body>
</html>