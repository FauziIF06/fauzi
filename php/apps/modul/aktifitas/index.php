<h1>Halaman Aktifitas User</h1>

<hr>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>User</th>
        <th>Kategori</th>
        <th>Waktu</th>
    </thead>
    <tbody>
        <?php
        // aktifitas berdasarkan siapa yang login
        // session_start();
        $id = $_SESSION['id'];

        if ($id == 1) {
            $query = $konek->query("SELECT aktifitas.*, 
                                    user.username 
                                    FROM aktifitas.user");

        } else {
            $query = $konek->query("SELECT aktifitas.*, user.username 
                                FROM aktifitas 
                                INNER JOIN user ON aktifitas.user_id=user.id 
                                WHERE aktifitas.user_id=$id");
        }
        foreach ($query as $hasil) {
            echo "<tr>
                    <td>$hasil[id]</td>
                    <td>$hasil[nama_aktifitas]</td>
                    <td>$hasil[username]</td>
                    <td>$hasil[waktu]</td>
                </tr>";
        }
        ?>
    </tbody>
</table>