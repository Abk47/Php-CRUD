<?php

$id = $_GET['id'];
include('config/db.php');

$query = "SELECT * FROM books WHERE id='$id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('layout/head.inc.php') ?>

<body class="mb-2 mt-5">

    <h3 class="text-center">Edit Book</h3>

    <div class="container col-md-6 bg-light p-4">

        <form method="GET" role="form" action="edit.php">

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <input type="hidden" name="bookid" value="<?php echo $row['id']; ?>">

                    <div class="form-group">
                        <label>Book Title</label>
                        <input type="text" name="btitle" class="form-control" autocomplete="off" value="<?php echo $row['title']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Book Price</label>
                        <input type="text" name="bprice" class="form-control" autocomplete="off" value="<?php echo $row['price']; ?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">EDIT</button>
                    <a href="index.php" class="btn btn-dark">BACK</a>
            <?php
                }
            }
            mysqli_close($conn);

            ?>

    </div>

</body>

</html>