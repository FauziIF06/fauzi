<form action="" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Reset"></td>
            <td><input type="Submit" value="Login" name="login"></td>
        </tr>
    </table>

</form>


<?php
session_start();

if (isset($_POST["login"])) {
    include "koneksi.php";
    $user = trim($_POST["username"]);
    $pass = trim($_POST["password"]);
    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass' ";
    // print($sql);
    // exit;
    $cek = $konek->query($sql);
    if ($cek->num_rows > 0) {
        $row = $cek->fetch_array();
        $_SESSION['username'] = $row['username'];
        // echo "<script>alert('Login Berhasil');window.location='index.php';</script>";
        header("location:index.php");
        // echo $cek->num_rows;
    } else {
        echo "Login Gagal";
    }
}

?>