<?php 

$nama_kategori = $_POST['kategori'];
$simpan = $konek->query("INSERT INTO kategori SET name='$nama_kategori'");
if ($simpan) {
    header("location:?page=kategori");
} else {
    echo"Simpan Gagal";
}