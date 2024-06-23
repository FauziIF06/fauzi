<?php 


include("koneksi.php");

    
    $id = $_GET['id'];
    $query = $konek->query("DELETE FROM kategori WHERE id = '$id'");
    
    if ($query) {
        echo"<script>alert('Data Berhasil Disimpan');</script>";
        echo"<script>location='kategori.php';</script>";
    }

    else{
        echo"<script>alert('Data Gagal Disimpan');</script>";
        echo"<script>location='kategori.php';</script>";
    }

