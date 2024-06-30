<?php
session_start();
if (empty($_SESSION['oke'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Aplikasi Toko</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=kategori">kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=produk">produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=aktifitas">Aktifitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=user">User</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </nav>
        <div class="row mt-10">
            <h1>Dashboard</h1>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        include("config/koneksi.php");
                        $page = @$_GET['page'] ? $_GET['page'] : '';
                        $act = @$_GET['act'] ? $_GET['act'] : '';

                        if (!empty($page) && !empty($act)) {
                            include "modul/" . $page . "/" . $act . ".php";
                        } else if (!empty($page)) {
                            include "modul/" . $page . "/index.php";
                        } else {
                            echo "Selamat Datang";
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>