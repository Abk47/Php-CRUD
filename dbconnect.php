<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bookshop';

$conn = mysqli_connect($host, $username, $password, $database);

// Checking for connection
if (!$conn) {
    die("Error in connecting to the database");
}
 ?>
 