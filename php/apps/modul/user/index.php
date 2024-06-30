<h1>Halaman User</h1>
<a href="?page=kategori&act=tambah" class="btn btn-success">
    Tambah
</a>
<hr>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        $query = $konek->query("SELECT * FROM user");
        catat_aktifitas($_SESSION['id'], 'kategori-view');
        foreach ($query as $hasil) {
            echo "<tr>
                    <td>$hasil[id]</td>
                    <td>$hasil[username]</td>
                    <td>$hasil[password]</td>
                    <td>
                        <a href='?page=kategori&act=edit&id=$hasil[id]' class='btn btn-sm btn-warning'>edit</a>
                        <a href='?page=kategori&act=hapus&id=$hasil[id]' class='btn btn-sm btn-danger'>hapus</a>
                    </td>
                </tr>";
        }
        ?>
    </tbody>
</table>