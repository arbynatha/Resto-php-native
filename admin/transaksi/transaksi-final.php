
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     halaman final bahwa telah menyelesaikan transaksi
-->
<?php
$id_transaksi       = $_POST['id_transaksi'];
$grand_total_harga        = $_POST['grand_total'];

$query_update_tr    = $koneksi->query("UPDATE transaksi SET
                                        grand_total_harga   = '$grand_total_harga',
                                        status_transaksi    = 'selesai'
                                        WHERE id_transaksi  = '$id_transaksi'
                                        ");
if ($query_update_tr) {
?>
    <script>
        // window.alert(' Transaksi Telah Di Selesaikan ');
        window.open('../../assets/invoice/index.php?id_transaksi=<?= $id_transaksi ?>', '_blank');
        window.location.href = "?page=transaksi";
    </script>
<?php
}
?>