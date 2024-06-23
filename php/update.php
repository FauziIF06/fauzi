<?php 


include("koneksi.php");

    $nama = $_GET['kategori'];
    $id = $_GET['id'];
    $query = $konek->query("UPDATE kategori SET NAME = '$nama' WHERE id = '$id'");
    
    if ($query) {
        echo"<script>alert('Data Berhasil Disimpan');</script>";
        echo"<script>location='kategori.php';</script>";
    }

    else{
        echo"<script>alert('Data Gagal Disimpan');</script>";
        echo"<script>location='kategori.php';</script>";
    }

