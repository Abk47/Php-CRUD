<?php

include('config/db.php');

$title = $_POST['btitle'];
$price = $_POST['bprice'];


$query = "INSERT INTO books(title,price) VALUES('$title', '$price')";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Error in query";
}

mysqli_close($conn);
