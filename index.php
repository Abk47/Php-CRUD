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
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabloid').DataTable();
    });
  </script>
</head>

<body class="main">

  <?php

  //Adding Database Connection 
  include('dbconnect.php');

  //Creating Query
  $query = "SELECT * FROM books";
  $result = mysqli_query($conn, $query);
  ?>

  <!-- <h3>PHP CRUD APPLICATION</h3> -->

  <!-- Display HTML -->
  <div class="container bg-white" style="padding-top:30px; margin-top:20px; ">

    <div class="row">
      <!-- <div class="col-md-4">
        <form class="form-group" method="POST" action="insert.php">
        <label>Book Title</label>
        <input type="text" name="btitle" class="form-control" autocomplete="off" required="required">

        <label>Book Price</label>
        <input type="text" name="bprice" class="form-control" autocomplete="off" required="required">
        <br>

        <button class="btn btn-primary" type="submit">ADD BOOK</button>
        </form>
    </div> -->

      <!-- Table HTML -->
      <div class="col-md-12" style="padding:10px; margin-top:-45px">

        <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#myModal">CREATE NEW</button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New Record</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form class="form-group" method="POST" action="insert.php">
                  <label>Book Title</label>
                  <input type="text" name="btitle" class="form-control" autocomplete="off" required="required">

                  <label>Book Price</label>
                  <input type="text" name="bprice" class="form-control" autocomplete="off" required="required">
                  <br>

                  <button class="btn btn-primary" type="submit">ADD BOOK</button>
                </form>
              </div>

            </div>
          </div>
        </div>

        <h3>Displaying all stored Records</h3>
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
            while ($row = mysqli_fetch_assoc($result)) {

              ?>
              <tr>
                <td><?php echo $row['book_title'] ?></td>
                <td><?php echo $row['book_price'] ?></td>
                <td>
                  <a href="editForm.php?id=<?php echo $row['book_id']; ?>" class="btn btn-info" role="button">EDIT</a>
                  <a href="delete.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger" role="button">DELETE</a>
                  <a href="" class="btn btn-dark" role="button">UPLOAD</a>
                </td>
              </tr>

            <?php
          }
          //Closing Database Connection
          mysqli_close($conn);
          ?>

          </tbody>
        </table>
      </div>
    </div>

</body>
</html>