<?php 


$server = "localhost";
$user = "root";
$pass = "";
$db = "fauzi";


$konek = new mysqli($server, $user, $pass, $db);

if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
else {
    // echo "Connected successfully";
}