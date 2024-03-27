

<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     query edit untuk tabl role
-->
<?php
$id_role_user                = $_POST['id_role_user'];
$nama_role_user         = $_POST['nama_role_user'];

if ($_POST) {
    $id_role_user            = $_POST['id_role_user'];
    $nama_role_user     = $_POST['nama_role_user'];

    $query_update = $koneksi->query("UPDATE role_user SET
                    
                            id_role_user = '$id_role_user',
                            nama_role_user = '$nama_role_user'
                            WHERE id_role_user = '$id_role_user'
                               ");

    if ($query_update) {
?>
        <script>
            window.alert('Data Berhasil Di ubah');
            window.location.href = '?page=role';
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert('Data Gagal Diubah');
            window.location.href = '?page=role';
        </script>
<?php
    }
}

?>