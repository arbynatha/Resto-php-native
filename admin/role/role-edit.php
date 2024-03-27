
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     halaman input untuk edit
-->

<?php
$id_role_user = $_GET['id_role_user'];
$query = $koneksi->query("SELECT * FROM role_user where id_role_user = '$id_role_user' 
                            ");

$hasil = $query->fetch_object();
?>
<center>
    <br>
    <h2>ubah Data Role</h2>
    <br>
    <table width="400px">
        <tr>
            <td>
                <form action="?page=role-update" method="POST">
                    <input type="text" value="<?= $hasil->id_role_user ?>" name="id_role_user" hidden>

                    <input class="form-control mb-2" value="<?= $hasil->nama_role_user ?>" name="nama_role_user" placeholder="Nama role">

                    <center><button class="btn btn-success" type="submit">Simpan</button></center>
                </form>
            </td>
        </tr>
    </table>
</center>