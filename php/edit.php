<?php
include("koneksi.php");
$id = $_GET['id'];
$query = $konek->query("SELECT * FROM kategori WHERE id = '$id'");
$data = $query->fetch_array();
?>

<form action="update.php" method="get">
    <input type="text" name="kategori" value="<?php echo $data['name'] ?>">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" value="simpan">
</form>
