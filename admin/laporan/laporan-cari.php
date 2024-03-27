
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     menu untuk laporan cari
-->
<?php
include("../../configurasi/koneksi.php");
$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];
// query untuk menampilkan semua transaksi berdasarkan tanggal
$query_select_tr = $koneksi->query("SELECT * FROM transaksi JOIN user
                                    ON transaksi.id_user = user.id_user
                                    WHERE waktu_transaksi 
                                    BETWEEN '$tgl_awal 00:00:00' AND '$tgl_akhir 23:59:59' ");

//menghitung jumlah transaksi dari hasil query select transaksi berdasarkan tanggal
$jumlahTransaksi    = mysqli_num_rows($query_select_tr);

//menghitung total harga berdasarkan tanggal
$query_select_sum   = $koneksi->query("SELECT SUM(grand_total_harga) AS totalpendapatan
                                        FROM transaksi
                                        WHERE waktu_transaksi 
                                        BETWEEN '$tgl_awal 00:00:00' AND '$tgl_akhir 23:59:59' ");

$totalpendapatan    = $query_select_sum->fetch_object()->totalpendapatan;
?>

<br>
<center>
    <P>
    <h1><i class="fa-brands fa-canadian-maple-leaf fa-spin fa-spin-reverse" style="color: #000000;"></i></h1>
    </P>

    <h3>Resto123</h3>
    <br>Laporan Transaksi Penjualan<br>Periode <?= $tgl_awal ?> - <?= $tgl_akhir ?>
</center>
<table>
    <center>
        <tr>
            <td>Total Pendapatan =
                Rp.<?= number_format($totalpendapatan, 2, ",", ".") ?>
            </td>
        </tr>
        <tr>
            <td>Jumlah Transaksi =
                <?= $jumlahTransaksi ?>
            </td>
        </tr>
    </center>
</table>

<br>
<table class="table table-striped">
    <tr>
        <td>No</td>
        <td>Waktu Transaksi</td>
        <td>Nomor Invoice</td>
        <td>Grand Total harga</td>
        <td>Nama Pembeli</td>
        <td>Nama Petugas</td>
        <td>Status Transaksi</td>
    </tr>
    <?php
    $no = 1;
    while ($hasil_select_tr = $query_select_tr->fetch_object()) {
    ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil_select_tr->waktu_transaksi ?></td>
            <td><?= $hasil_select_tr->nomor_transaksi ?></td>
            <td>Rp.<?= number_format ($hasil_select_tr->grand_total_harga, 2,",", ".") ?></td>
            <td><?= $hasil_select_tr->nama_pembeli ?></td>
            <td><?= $hasil_select_tr->nama_user ?></td>
            <td><?= $hasil_select_tr->status_transaksi ?></td>
        </tr>

    <?php
        $no++;
    }
    ?>
    <tr>
        <td colspan="3">
            <h4>Total Pendapatan</h4>
        </td>
        <td>
            <h4> Rp.<?= number_format($totalpendapatan, 2,",", ".") ?></h4>
        </td>
        <td colspan="3"></td>
    </tr>
</table>
<center>
    <a href="../laporan/laporan-print.php?tgl_awal=<?= $tgl_awal ?>&tgl_akhir=<?= $tgl_akhir ?>">
        <button class="btn btn-secondary">Print</button></a>
</center>
<br>
<br>
<br>
<style>
    .ttd-petugas {
        float: right;
        text-align: left;
        width: 250px;
    }
</style>
<div class="ttd-petugas">
    <p>
        Bekasi, <?= date("D-M-Y"); ?><br>
        <?php echo $_SESSION['role'] ?>
        <br><br><br>
        <?php echo $_SESSION['nama_user'] ?>
    </p>
</div>