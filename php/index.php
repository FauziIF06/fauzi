<?php
session_start();

// Menghindari redirect setelah login berhasil ketika sudah ada session
if ($_SESSION['username'] === "") {
    header("Location: login.php");
    exit;
}

// // Memulai session

// // Redirect ke halaman login jika tidak ada session
// if (!isset($_SESSION["username"])) {
//     header("Location: login.php");
//     exit;
// }


?>
<a href="tambah.php"> Tambah</a>
<a href="logout.php"> log out</a>
<table border="1">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    <?php
    include("koneksi.php");

    $query = $konek->query("SELECT * FROM kategori");
    $nomor = 1;
    foreach ($query as $row) {
        echo "<tr>";
        echo "<td>" . $nomor . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td><a href='edit.php?id=$row[id]" . "'>Edit</a></td>";
        echo "<td><a href='hapus.php?id=$row[id]" . "'>Hapus</a></td>";
        echo "</tr>";
        $nomor++;
    }
    ?>
</table>