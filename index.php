<?php
include('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="./style.css" rel="stylesheet">
</head>

<body class="main">
  <?php include('layout/nav.inc.php'); ?>

  <div class="container bg-white mt-5">
    <div class="row">
      <div class="col-md-12 p-2 mt-3">
        <?php include('layout/add_modal.inc.php');  ?>

        <h3>Displaying all stored books</h3>
        <table class="table" id="tabloid">
          <thead>
            <tr>
              <th>Book Title</th>
              <th>Book Price</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php echo $row['title'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info" role="button">EDIT</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" role="button">DELETE</a>
                    <a href="" class="btn btn-sm btn-dark" role="button">UPLOAD</a>
                  </td>
                </tr>

            <?php
              }
            }
            mysqli_close($conn);
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#tabloid').DataTable();
      });
    </script>
</body>

</html>