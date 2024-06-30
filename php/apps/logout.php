<?php
session_start();
include "config/koneksi.php";
catat_aktifitas($_SESSION['id'], 'logout-sukses');
session_destroy();
header("location:login.php");

