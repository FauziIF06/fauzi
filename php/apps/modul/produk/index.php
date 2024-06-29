<h1>Halaman produk</h1>
<a href="?page=produk&act=tambah" class="btn btn-success">
    Tambah
</a>
<hr>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama produk</th>
        <th>Kategori</th>
        <th>Satuan</th>
        <th>Harga_beli</th>
        <th>Harga_jual</th>
        <th>Stock</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        $query = $konek->query("SELECT produk.*,kategori.name as kategori
        FROM produk,kategori 
        WHERE produk.kategori_id = kategori.id");
        foreach ($query as $hasil) {
            echo "<tr>
                    <td>$hasil[id]</td>
                    <td>$hasil[name]</td>
                    <td>$hasil[kategori]</td>
                    <td>$hasil[satuan]</td>
                    <td>$hasil[harga_beli]</td>
                    <td>$hasil[harga_jual]</td>
                    <td>$hasil[stock]</td>
                    <td>
                        <a href='?page=produk&act=edit&id=$hasil[id]' class='btn btn-sm btn-warning'>edit</a>
                        <a href='?page=produk&act=hapus&id=$hasil[id]' class='btn btn-sm btn-danger'>hapus</a>
                    </td>
                </tr>";
        }
        ?>
    </tbody>
</table>