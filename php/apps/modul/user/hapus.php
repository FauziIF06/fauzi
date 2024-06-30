<?php
catat_aktifitas($_SESSION['id'], 'kategori-delete');
$id = @$_GET['id'];
$hapus = $konek->query("DELETE FROM kategori WHERE id='$id'");
// print_r($hapus); 

if ($hapus) {
    header("location:?page=kategori");
} else {
    echo "Update Gagal";
}
