

<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     query delete
-->
<?php
$id_role_user = $_GET['id_role_user'];
$query_delete = $koneksi->query("DELETE FROM role_user WHERE id_role_user = '$id_role_user'");

if ($query_delete) {
?>
    <script>
        window.alert('Data berhasil di DELETE !');
        window.location.href = '?page=role';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data gagal di DELETE !');
        window.location.href = '?page=role';
    </script>
<?php
}
?>