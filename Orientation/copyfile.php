<?php

$source = '/Applications/MAMP/htdocs/phptuts/examp.txt';


$destination = '/Applications/MAMP/htdocs/phptuts/CRUD/examp.txt';


if( !copy($source, $destination) ) {
    echo "File can't be copied! \n";
}
else {
    echo "File has been copied! \n";
}

?>