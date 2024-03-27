
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     query delete untuk transaksi
-->
<?php
$id_detail_transaksi = $_GET['id_detail_transaksi'];
$nomor_transaksi     = $_GET['nomor_transaksi'];
$query_delete = $koneksi->query("DELETE FROM detail_transaksi WHERE id_detail_transaksi = '$id_detail_transaksi'");

if ($query_delete) {
?>
    <script>
        window.alert('Data berhasil di DELETE !');
        window.location.href = '?page=transaksi';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data gagal di DELETE !');
        window.location.href = '?page=transaksi';
    </script>
<?php
}
?>