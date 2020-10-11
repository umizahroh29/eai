<?php require 'getUsers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>HRD App - Employee List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body style="background-color: #2a2a2a;">
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="list.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="sr-only">(current)</span>
        </a>
        <a class="nav-item nav-link active" href="#">
            HRD App
            <span class="sr-only">(current)</span>
        </a>
        <a class="nav-item nav-link active" href="add.php">
            Add Employee
            <span class="sr-only">(current)</span>
        </a>
    </div>
</nav>
<div class="card text-white bg-dark m-5" style="max-width: 100%;">
    <div class="card-header">Human Resource Development</div>
    <div class="card-body">
        <h5 class="card-title">Employee List</h5>
        <table id="table1" class="table table-hover table-striped table-bordered table-dark" style="width:100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $item) { ?>
                <tr>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td><?php echo $item['position'] ?></td>
                    <td>
                        <form action="add.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button class="btn btn-light" type="submit">Edit</button>
                            <button class="btn btn-danger btnDelete" type="button" data-id="<?php echo $item['id'] ?>">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>
<script>
  $(document).ready(function () {
    $('#table1').DataTable();

    $('.btnDelete').click(function () {
      let id = $(this).data('id')
      if (confirm('Anda Yakin?')) {
        $.ajax({
          type: 'post',
          url: 'deleteUser.php',
          dataType: 'json',
          data: {id: id},
          success: function (response) {
            if (!response.status) {
              alert('Maaf, terjadi kesalahan')
              return false
            }

            window.location.reload()
          }
        })
      }
    })
  });
</script>