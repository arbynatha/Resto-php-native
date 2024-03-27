
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     query untuk insert data ke databasse
-->

<?php
$nomor_transaksi            = $_POST['nomor_transaksi'];
$query_select_transaksi     = $koneksi->query("SELECT *FROM transaksi where nomor_transaksi='$nomor_transaksi'");

$id_transaksi               = $query_select_transaksi->fetch_object()->id_transaksi;

$id_menu                    = $_POST['id_menu'];
$query_select_menu          = $koneksi->query("SELECT *FROM menu where id_menu='$id_menu'");

$harga_menu                 = $query_select_menu->fetch_object()->harga_menu;

$jumlah_menu                = $_POST['jumlah_menu'];
$total_harga                = $harga_menu * $jumlah_menu;

$query_count_dtransaksi    = $koneksi->query("SELECT COUNT(*) AS cek_menu FROM detail_transaksi
                                                WHERE id_transaksi = '$id_transaksi' AND id_menu = '$id_menu' 
                                                ");
$hasil_count_dtransaksi     = $query_count_dtransaksi->fetch_object()->cek_menu;

if ($hasil_count_dtransaksi > 0) { 

?>
    <script>
        window.alert('menu sudah dipesan. silahkan rubah jumlahnya saja!');
        window.location.href = 'admin.php?page=transaksi_detail-create&nomor_transaksi=<?= $nomor_transaksi ?>';
    </script>
    <?php

} else {

    $query_insert_dtransaksi     = $koneksi->query("INSERT INTO detail_transaksi 
    VALUES('','$id_transaksi','$id_menu','$jumlah_menu','$total_harga')
    ");

    if ($query_insert_dtransaksi) {
    ?>
        <script>
            window.alert('Data Berhasil disimpan');
            window.location.href = 'admin.php?page=transaksi_detail-create&nomor_transaksi=<?= $nomor_transaksi ?>';
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert('Data Gagal Disimpan');
            window.location.href = 'admin.php?page=transaksi';
        </script>
<?php
    }
}

?>