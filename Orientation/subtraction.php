<?php
$first_num=$_POST['first_num'];
$second_num = $_POST['second_num'];
$result='';
if(is_numeric($first_num)&& is_numeric($second_num)){
    $result=$first_num - $second_num;
}

?>
<body>
<form action="" method="post">
<input type="number" name="first_num" required="required" value="<?php echo $first_num;?>"> </br> </br>
<input type="number" name="second_num" required="required" value="<?php echo $second_num;?>"></br> </br>
<input type="readonly" name="result" value="<?php echo $result;?>"></br> </br>
<input type="submit" value="Subtract" />
<input type="button" value="Refresh" onclick="return RefreshWindow();"/>

</form>
</body>

<?php
function RefreshWindow()
{
    window.location.reload(true);
}
?>
