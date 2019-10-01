<?php

//add Database Connection
include('dbconnect.php');

$title = $_POST['btitle']; //Array variables are being obtained from the form (btitle)

$price = $_POST['bprice']; //Array variables are being obtained from the form (bprice)

//Creating Query

$query = "INSERT INTO books(book_title,book_price) VALUES('$title', '$price')";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Error in query";
}

mysqli_close($conn);
