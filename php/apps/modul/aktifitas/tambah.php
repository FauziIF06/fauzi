<h1>Form Tambah</h1>
<form action="?page=produk&act=simpan" method="post">
    <table class="table">
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="name" class="form-control"></td>

            <td>Kategori</td>
            <td>
                <select name="kategori_id" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <?php
                    $query = $konek->query("SELECT * FROM kategori");
                    foreach ($query as $hasil) {
                        echo "<option value='$hasil[id]'>$hasil[name]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><input type="number" name="harga_beli" class="form-control"></td>
            <td>Harga Jual</td>
            <td><input type="number" name="harga_jual" class="form-control"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input type="text" name="satuan" class="form-control"></td>
            <td>Stok</td>
            <td><input type="number" name="stock" class="form-control"></td>
        </tr>
    </table>
    <input type="submit" value="Simpan" class="btn btn-primary ">
</form>