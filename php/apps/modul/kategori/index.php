<h1>Halaman Kategori</h1>
<a href="?page=kategori&act=tambah"class="btn btn-success">
    Tambah
</a>
<hr>
<table class="table table-bordered">
        <thead>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
        </thead>
    <tbody>
       <?php
       $query = $konek->query("SELECT * FROM kategori");
       foreach ($query as $hasil) {
        echo" 
        <tr>
        <td>$hasil[id]</td>
        <td>$hasil[name]</td>
        <td>
            <a href='?page=kategori&act=edit&id=$hasil[id]' class='btn btn-sm btn-warning'> edit</a>
            <a href='?page=kategori&act=hapus&id=$hasil[id]' class='btn btn-sm btn-danger'> hapus</a>
        </td>
        </tr>";
       }
       ?>
    </tbody>
</table>