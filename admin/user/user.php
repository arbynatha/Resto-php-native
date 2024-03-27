
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     halaman untuk memanggil data
-->

<?php
include('../login/login-session-cek.php');
?>
<br>
<center>
    <h2>User</h2>
</center>
<!-- Button trigger modal -->
<a href="?page=user-create">
    <button class="btn btn-success mb-2">Tambahkan User</button>
</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama User</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Foto</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    $query_select_tr = $koneksi->query(" SELECT * FROM user 
                                        JOIN role_user 
                                         ON user.id_role_user = role_user.id_role_user
                                         ");
    while ($hasil_select_tr = $query_select_tr->fetch_object()) {
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil_select_tr->nama_user ?></td>
            <td><?= $hasil_select_tr->username ?></td>
            <td><?= $hasil_select_tr->password ?></td>
            <td><?= $hasil_select_tr->nama_role_user ?></td>
            <td>
                <img width="100" class="img-fluid" src="../../assets/image/user/<?= $hasil_select_tr->photo_user?>">
            </td>
            <td>|
                <a style="text-decoration:none" href="?page=user-edit&id_user=<?= $hasil_select_tr->id_user ?>">
                    <i class="fa-solid fa-pen-to-square fa-sm" style="color: #005eff;"></i>
                </a>
                |
                <a style="text-decoration:none" href="?page=user-delete&id_user=<?= $hasil_select_tr->id_user ?>" onclick="return confirm ('are you sure?')">
                    <i class="fa-solid fa-trash fa-sm" style="color: #ff0000;"></i>
                </a>
            </td>
        </tr>
    <?php
    $no++;
    }
    ?>
</table>
<br>
<br>