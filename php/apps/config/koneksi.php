<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "fauzi";

$konek = new mysqli($server, $user, $pass, $db);

if ($konek->connect_error) {
    die("Koneksi gagal " . $konek->connect_error);
} else {
    // echo "sukses";
}


function catat_aktifitas($user_id, $nama_aktifitas)
{
    global $konek;
    $query = $konek->query("INSERT INTO aktifitas SET user_id='$user_id',nama_aktifitas='$nama_aktifitas' ");
}
