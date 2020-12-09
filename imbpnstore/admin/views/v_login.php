<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets4/css/template/style.css">
    <link rel="stylesheet" href="../assets4/fontawesome/css/all.css">

    <title>Halaman Login</title>
  </head>
  <body class="bg-info">
    <div class="container-fluid">
        <div class="card card-login mt-5 mx-auto">
        <div class="card-header">
            <h5 class="text-center"><i class="fas fa-user-lock" ></i> Login User</h5>
        </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                        <span><?=(isset($msg))?$msg:'';?></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-4">Submit <i class="fas fa-sign-in-alt"></i></button>
                    <button type="reset" class="btn btn-danger btn-block">Reset <i class="fas fa-trash-restore-alt"></i></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../assets4/jquery/jquery.min.js"></script>
    <script src="../assets4/js/bootstrap.bundle.min.js"></script>
  </body>
</html>