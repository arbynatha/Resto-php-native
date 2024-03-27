
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     menampilkan halaman role yng berasal dari databasse
-->

<?php
include('../login/login-session-cek.php');
?>
<br>
<center>
    <h2>Role</h2>
</center>
<!-- Button trigger modal -->
<a href="?page=role-create">
    <button class="btn btn-success mb-2">Tambahkan Role</button>
</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama User</th>
        <th>--Action--</th>
    </tr>
    <?php
    $query_select_tr = $koneksi->query(" SELECT * FROM role_user
                                         ");
    while ($hasil_select_tr = $query_select_tr->fetch_object()) {
    ?>
        <tr>
            <td><?= $hasil_select_tr->id_role_user ?></td>
            <td><?= $hasil_select_tr->nama_role_user ?></td>
            <td>|
                <a style="text-decoration:none" href="?page=role-edit&id_role_user=<?= $hasil_select_tr->id_role_user ?>">
                    <i class="fa-solid fa-pen-to-square fa-sm" style="color: #005eff;"></i>
                </a>
                |
                <a style="text-decoration:none" href="?page=role-delete&id_role_user=<?= $hasil_select_tr->id_role_user ?>" onclick="return confirm ('are you sure?')">
                    <i class="fa-solid fa-trash fa-sm" style="color: #ff0000;"></i>
                </a>|
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<br>
<br>