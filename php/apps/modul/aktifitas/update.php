<?php


$id = @$_POST['id'];
$name = trim(@$_POST['name']);
$kategori_id = trim(@$_POST['kategori_id']);
$harga_beli = trim(@$_POST['harga_beli']);
$harga_jual = trim(@$_POST['harga_jual']);
$satuan = trim(@$_POST['satuan']);
$stock = trim(@$_POST['stock']);

$simpan = $konek->query("UPDATE produk SET 
                name='$name', 
                kategori_id='$kategori_id',
                harga_beli='$harga_beli',
                harga_jual='$harga_jual',
                satuan='$satuan',
                stock='$stock' WHERE id='$id'");
// print_r($simpan); 


if ($simpan) {
    header("location:?page=produk");
} else {
    echo "Update Gagal";
}
