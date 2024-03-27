
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     halaman data siapa yg login
-->

<?php
include('../login/login-session-cek.php');
?>
<br>
<center>
    <h4>
        Anda Login Sebagai
        <?php
        echo $_SESSION['role'];
        ?>
    </h4>
</center>
<br>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nama User</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Foto</th>
    </tr>

    <?php
    $id_user    = $_SESSION['id_user'];
    $query_select_tr = $koneksi->query(" SELECT * FROM user 
                                        JOIN role_user 
                                         ON user.id_role_user = role_user.id_role_user
                                         where id_user = $id_user");
    while ($hasil_select_tr = $query_select_tr->fetch_object()) {
    ?>
        <tr>
            <td><?= $hasil_select_tr->id_user ?></td>
            <td><?= $hasil_select_tr->nama_user ?></td>
            <td><?= $hasil_select_tr->username ?></td>
            <td><?= $hasil_select_tr->password ?></td>
            <td><?= $hasil_select_tr->nama_role_user ?></td>
            <td>
                <img width="100" class="img-fluid" src="../../assets/image/user/<?= $hasil_select_tr->photo_user ?>">
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<br>
<br>