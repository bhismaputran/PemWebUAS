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

    <!--    icon    -->
    <link rel="shortcut icon" href="../assets4/images/logo/imbpnstore.png" type="image/s-icon">

    <title>Halaman Dashboard Admin</title>
  </head>
  <body class="bg-light">
            <!-- header -->
        <nav class="navbar navbar-expand navbar-light bg-info">
        <a class="navbar-brand" href="#">
            <img src="../assets4/images/logo/imbpnstore.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            IMBPN STORE
        </a>
        <button class="btn" type="buttom" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="profil" role="button" data-toggle="dropdown"
                arta-haspopup="true" 
                    arta-haspopup="false">
                    <img class="rounded-circle" width="30" src="../assets4/images/user/user.png" alt="logo">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profil">
                    <a class="dropdown-item" href="../admin/controller/logout.php">Logout</a>
                </div>
            </li>
        </ul>
        </nav>
    <!--Menu Sidebar-->
    <div id="wrapper">
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?mod=home">
                <i class="fas fa-home"></i> <span> Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?mod=produk">
                <i class="fas fa-shopping-cart"></i> <span> Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?mod=pembeli">
                <i class="fas fa-users"></i> <span> Pembeli</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?mod=pemesanan">
                <i class="fas fa-cart-plus"></i> <span> Pemesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?mod=pembayaran">
                <i class="fas fa-money-check-alt"></i> <span> Pembayaran</span>
                </a>
            </li>
        </ul>
        <?php include_once $content; ?>
    </div>
    
    <!--    Halaman Content    -->


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../assets4/jquery/jquery.min.js"></script>
    <script src="../assets4/js/bootstrap.bundle.min.js"></script>
    <script src="../assets4/js/template/custom.js"></script>
  </body>

<!-- Footer -->
    <footer class="page-footer font-small green">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://youtube.com/IMBPNChannel"> IMBPN STORE</a>
    </div>
    </footer>
 <!--Footer -->
</html>