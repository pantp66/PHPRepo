<?php
class emp{
    public $name="";
    public $hobbies="";
    public $birthdate="";
}

$e=new emp();
$e->name="priyanka";
$e->hobbies="sports";
$e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
echo json_encode($e);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Download PDF using PHP from HTML Link</title>
</head>
<body>
        <h2 style="color:green;">Welcome To GFG</h2>
        <p><b>Click below to download PDF</b>
        </p>
        <a href="gfgpdf.php?file=gfgpdf">Download PDF Now</a></center>
</body>

</html>