<?php
$name = @$_POST['name'];
$kategori_id = @$_POST['kategori_id'];
$harga_beli = @$_POST['harga_beli'];
$harga_jual = @$_POST['harga_jual'];
$satuan = @$_POST['satuam'];
$stock = @$_POST['stock'];
$simpan = $konek->query("INSERT INTO produk SET 
                        name='$name',
                        kategori_id='$kategori_id',
                        harga_beli='$harga_beli',
                        harga_jual='$harga_jual',
                        satuan='$satuan',
                        stock='$stock'
                    ");
if ($simpan) {
    header("location:?page=produk");
} else {
    echo "Simpan Gagal";
}
