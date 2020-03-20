<html>
    <head>
        <title>Reverse number in PHP</title>
    </head>
    <body>
        <form method="post">
            Enter a number:
            <input type="number" name="number">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php
/**
 * Reverse number in PHP
 */
 if($_POST)
 {
    $num = $_POST['number'];
    $revnum = 0;

    while ($num > 1)
    {
        $rem = $num % 10;
        $revnum = ($revnum * 10) + $rem;
        $num = ($num / 10);
    }

    echo "Reverse number of ".$_POST['number']." is: $revnum";

 }