<?php
if($_POST){
$number=$_POST['number'];
if($number>0){
    echo $number."is positive number";
}else if($number<0)
{
    echo $number."is negative number";
} else if($number==0)
{
echo $number."you have entered Zero";
} else{
    echo "please enter a numeric value";
}
if(array_key_exists('check',$_POST))
{
     myfun();
}
}
?>
<body>
<form method="post">
<input type="text" name="number">
<input type="submit" value="Check">
 </form>
</body>
