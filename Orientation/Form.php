<!DOCTYPE HTML>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="name"><br><br>
E-mail:<input type="text" name="email"><br><br>
Website:<input type="text" name="Website"><br> <br>
Comment:<textarea name="Comment" rows="5" cols="40"></textarea><br> <br>
Gender:<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Male">Male
<?php
echo "My_first_Cookie".$_COOKIE["My_first_Cookie"];
?>
<input type="submit">
</form>
</body>
</html>