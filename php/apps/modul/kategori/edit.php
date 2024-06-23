<?php
$edit = $konek->query("SELECT * FROM kategori WHERE id='$_GET[id]'");

if ($edit->num_rows > 0) {
    $data = $edit->fetch_array();
} else {
    $data = "";
}
?>

<form action="?page=kategori&act=update" method="post" >
    <input type="hidden" name="id" value="<?php $data['id'] ?>">
    <table class="table">
        <tr>
            <td>Nama Kategori</td>
            <td><input type="text" name="kategori" class="form-control" value="<?= $data['name'] ?>"> </td>
        </tr>
    </table>
    <input type="submit" value="simpan" class="btn btn-primary">
</form>