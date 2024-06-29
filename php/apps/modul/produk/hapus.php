<?php

$nama_produk = @$_POST['produk'];
$id = @$_GET['id'];
$hapus = $konek->query("DELETE FROM produk WHERE id='$id'");
// print_r($hapus); 


if ($hapus) {
    header("location:?page=produk");
} else {
    echo "Update Gagal";
}
