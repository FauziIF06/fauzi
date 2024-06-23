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
