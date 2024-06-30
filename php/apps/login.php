<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>
    <?php
    if (isset($_POST["login"])) {
        include "config/koneksi.php";
        $user =  $_POST['username'];
        $pass =  $_POST['password'];
        $cek = $konek->query("SELECT * FROM user WHERE username='$user' AND password='$pass' ");
        if ($cek->num_rows > 0) {
            $row = $cek->fetch_array();
            session_start();
            $_SESSION["oke"] = $row["username"];
            $_SESSION["id"] = $row["id"];
            catat_aktifitas($row['id'], 'login-sukses');
            // echo "<script>alert('Sukses Login'); window.location='index.php';</script>";
            header("location:index.php");
        } else {
            echo "<script>alert('Gagal Login');</script>";
        }
    }
    ?>
</body>

</html>