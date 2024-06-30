<?php
$edit = $konek->query("SELECT * FROM produk WHERE id='$_GET[id]' ");

if ($edit->num_rows > 0) {
    $data = $edit->fetch_array();
} else {
    $data = "";
}
?>

<h1>Form Tambah</h1>
<form action="?page=produk&act=update" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <table class="table">
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="name" class="form-control" value="<?= $data['name'] ?>"></td>

            <td>Kategori</td>
            <td>
                <select name="kategori_id" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <?php
                    $query = $konek->query("SELECT * FROM kategori");
                    foreach ($query as $hasil) {
                        if ($data['kategori_id'] == $hasil['id']) {
                            echo "<option value='$hasil[id]' selected>$hasil[name]</option>";
                        }
                        echo "<option value='$hasil[id]'>$hasil[name]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><input type="number" name="harga_beli" class="form-control" value="<?= $data['harga_beli'] ?>"></td>
            <td>Harga Jual</td>
            <td><input type="number" name="harga_jual" class="form-control" value="<?= $data['harga_jual'] ?>"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input type="text" name="satuan" class="form-control" value="<?= $data['satuan'] ?>"></td>
            <td>Stok</td>
            <td><input type="number" name="stock" class="form-control" value="<?= $data['stock'] ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Simpan" class="btn btn-primary ">
</form>