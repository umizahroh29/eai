<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi HRD</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- FONT AWS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: #2a2a2a;">
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="add.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="sr-only">(current)</span>
        </a>
        <a class="nav-item nav-link active" href="list.php">
            Data Pegawai
            <span class="sr-only">(current)</span>
        </a>
    </div>
</nav>
<div class="container mt-3">
    <div class="row mg-4">
        <div class="col md-12">
            <div class="alert alert-secondary" role="alert">
                <strong>A-HRD untuk Fungsionalitas Departemen HRD<i class="fa fa-fw fa-frown-up"></i></strong>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card text-white bg-dark mb-3 col-md">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">INPUT DATA PEGAWAI</h5>
                    <form action="insertUser.php" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                            <small id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control" id="position" placeholder="Position">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script>
  $(document).ready(function () {
      <?php if(isset($_POST['id'])) { ?>
    $.ajax({
      type: 'post',
      url: 'getUser.php',
      dataType: 'json',
      data: {id: '<?php echo $_POST['id'] ?>'},
      success: function (response) {
        $('#name').val(response.name)
        $('#email').val(response.email)
        $('#position').val(response.position)
        $('#id').val(response.id)
      }
    })

    $('form').attr('action', 'updateUser.php')
      <?php } ?>

    $('#success').delay(2000).fadeOut('slow');
  })
</script>