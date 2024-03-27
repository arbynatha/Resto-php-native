<!-- 
     ini adalah tampilan menu home untuk menampilkan beberapa card 
     yang merekan sesuai dengan database 
-->


<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 
-->

<?php
$query_select_a = $koneksi->query("SELECT * FROM menu");

//menghitung jumlah menu
$jumlahMenu   = mysqli_num_rows($query_select_a);

$query_select_b = $koneksi->query("SELECT * FROM transaksi where status_transaksi = 'onproses'");

//menghitung jumlah status on-proses dalam status_transaksi
$jumlahOnproses   = mysqli_num_rows($query_select_b);

$query_select_c = $koneksi->query("SELECT * FROM transaksi where status_transaksi = 'selesai'");

//menghitung jumlah transaksi yang tersedia
$jumlahTransaksi   = mysqli_num_rows($query_select_c);
?>

<center>

     <!-- memanggil sesion role dan nama user untuk ditampilkan -->
     <h5>
          Selamat menjalani hari,
          <?php
          $namauser = $_SESSION['nama_user'];
          $role = $_SESSION['role'];
          echo $role ." ". $namauser
          ?>
     </h5>
     <br>
   
     <div class="row">
            <!-- menampilkan jumlah row pada table menu  -->
          <div class="col">
               <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header text-bg-primary">Menu Tersedia</div>
                    <div class="card-body">
                         <h5 class="card-title">
                              <?= $jumlahMenu ?>
                         </h5>
                         <hr>
                         <p class="card-text">
                              <a class="nav-link link-primary" href=""></a>
                         </p>
                    </div>
               </div>
          </div>
            <!-- menampilkan jumlah pesanan yang berstatus onproses pada table transaksi  -->
          <div class="col">
               <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header text-bg-secondary">Pesanan ON Proses</div>
                    <div class="card-body">
                         <h5 class="card-title"> <?= $jumlahOnproses ?></h5>
                         <hr>
                         <p class="card-text">
                              <a class="nav-link link-primary" href=""></a>
                         </p>
                    </div>
               </div>
          </div>
            <!-- menampilkan jumlah pesanan yang berstatus selesai pada table transaksi  -->
          <div class="col">
               <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header text-bg-danger">Transaksi Selesai</div>
                    <div class="card-body">
                         <h5 class="card-title"><?= $jumlahTransaksi ?></h5>
                         <hr>
                         <p class="card-text">
                              <a class="nav-link link-primary" href=""></a>
                         </p>
                    </div>
               </div>
          </div>
     </div>
</center>