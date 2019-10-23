<?php

$bid = $_GET['id'];

include('config/db.php');

$query = "DELETE FROM books WHERE id = $bid";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Failed to Deleted";
}
