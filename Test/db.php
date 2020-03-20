<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "PHPTUTS_DB";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$sql="CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 )";
 if ($connect->query($sql) === TRUE) {
   // echo "Table user created successfully";
} else {
    //echo "Error creating table: " . $conn->error;
}

$connect->close();
?>