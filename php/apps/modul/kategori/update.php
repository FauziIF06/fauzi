<?php

$nama_kategori = @$_POST['kategori'];
$id = @$_POST['id'];
$simpan = $konek->query("UPDATE kategori SET name='$nama_kategori' WHERE id='$id'");
// print_r($simpan); 


if ($simpan) {
    header("location:?page=kategori");
} else {
    echo "Update Gagal";
}
