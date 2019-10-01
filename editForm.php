<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <?php

    $id = $_GET['id'];


    //Add Database Connection
    include('dbconnect.php');

    //Create Query
    $query = "SELECT * FROM books WHERE book_id='$id'";

    $result = mysqli_query($conn, $query);

    ?>


    <h3 style="text-align:center; margin-bottom:20px; margin-top:30px">EDIT FORM</h3>
    <div class="container col-md-6 bg-light" style="padding:30px;">

        <form method="GET" role="form" action="edit.php">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <input type="hidden" name="bookid" value="<?php echo $row['book_id']; ?>">

                <div class="form-group">
                    <label>Book Title</label>
                    <input type="text" name="btitle" class="form-control" autocomplete="off" value="<?php echo $row['book_title']; ?>">
                </div>

                <div class="form-group">
                    <label>Book Price</label>
                    <input type="text" name="bprice" class="form-control" autocomplete="off" value="<?php echo $row['book_price']; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-success">EDIT</button>
                <a href="index.php" class="btn btn-dark">BACK</a>
            <?php

        }

        mysqli_close($conn);

        ?>

    </div>

</body>

</html>