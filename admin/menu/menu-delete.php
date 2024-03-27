
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     mengahpus data yg di database seusai id yg dikirimkan
-->
<?php
$id_menu = $_GET['id_menu'];
$query_delete = $koneksi->query("DELETE FROM menu WHERE id_menu = '$id_menu'");

if ($query_delete) {
?>
    <script>
        window.alert('Data berhasil di DELETE !');
        window.location.href = '?page=menu';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data gagal di DELETE !');
        window.location.href = '?page=menu';
    </script>
<?php
}
?>