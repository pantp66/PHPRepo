
<?php
$numbers=array(1,2,3,4,5,6,7,8,9,10);
foreach ($numbers as $value) {
   echo "value is $value <br/>";
}
?>

<?php
$name_one=array("priyanka","paige","jack","antony");
echo "accessing the array variable:\n";
echo $name_one[0],"\n";
echo $name_one[1],"\n";
echo $name_one[2],"\n";
echo $name_one[3],"\n";
?>

<?php
$arr = array(
   "a" => "Welcome",
   "b" => "to",
   "d" => "MyWebsite"
);
foreach ($arr as $key => $value) {
   echo "key = " . $key . ", value = "
       . $value . "\n";
}

?>
