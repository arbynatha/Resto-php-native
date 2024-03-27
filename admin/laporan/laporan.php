
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     menu untuk menampilkan laporan
-->
<br>
<center>
    <h1 class="mb-5">laporan Transaksi</h1>
    <div class="row">
        <div class="col"></div>
        <div class="col-5">
            <form action="?page=laporan-cari" method="POST">
                <label>
                    <font size="4">Tanggal Awal</font>
                </label>
                <input class="form-control text-center mb-3" type="date" name="tgl_awal">
                <label>
                    <font size="4">Tanggal Akhir</font>
                </label>
                <input class="form-control text-center mb-3" type="date" name="tgl_akhir" id="">
                <div>
                    <input class="btn btn-primary" type="submit" value="Cari Data">
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</center>