<h1>Halaman Aktifitas User</h1>

<hr>
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>User</th>
        <th>Aktifitas</th>
        <th>Waktu</th>
    </thead>
    <tbody>
        <?php
        $query = $konek->query("SELECT aktifitas.*, 
                                user.username 
                                FROM aktifitas,user 
                                WHERE aktifitas.user_id=user.id; ");
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