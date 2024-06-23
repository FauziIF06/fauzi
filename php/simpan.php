<?php 


include("koneksi.php");

    $nama = $_GET['kategori'];
    $query = $konek->query("INSERT INTO kategori (name) VALUES ('$nama')");
    
    if ($query) {
        echo"<script>alert('Data Berhasil Disimpan');</script>";
        echo"<script>location='kategori.php';</script>";
    }

    else{
        echo"<script>alert('Data Gagal Disimpan');</script>";
        echo"<script>location='kategori.php';</script>";
    }

