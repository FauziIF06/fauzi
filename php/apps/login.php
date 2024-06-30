<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3>Form Login</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["login"])) {
        include "config/koneksi.php";
        $user = trim($_POST["username"]);
        $pass = trim($_POST["password"]);
        $cek = $konek->query("SELECT * FROM user WHERE username = '$user' AND password = '$pass' ");
        if ($cek->fetch_array() > 0) {
            $row = $cek->fetch_array();
            session_start();
            $_SESSION["username"] = $row["username"];
            catat_aktifitas($row['id'], 'login-sukses');
            // header("location:index.php");
        } else {
            echo "Login Gagal";
        }
    }
    ?>
</body>

</html>