<!-- ini untuk memanggil file koneksi yang terdapat query pemanggilan database -->
<?php
include("../../configurasi/koneksi.php");
// mengecek adanya sebuah proses login
session_start();
include('../login/login-session-cek.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-- bagian header -->

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Resto Rynth</title>

     <!-- bootstrap css-->
     <link rel="stylesheet" href="../../assets/css/bootstrap.css">

     <!-- href buat css -->
     <link rel="stylesheet" href="../../assets/css/layout.css">

     <!-- fontawesome -->
     <link href="../../assets/fontawesome/css/fontawesome.css" rel="stylesheet">
     <link href="../../assets/fontawesome/css/brands.css" rel="stylesheet">
     <link href="../../assets/fontawesome/css/solid.css" rel="stylesheet">
</head>
<!-- tutup header -->

<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 
-->

<!-- bagian body sidebar -->

<!--
     pada bagian side bar ini saya menggunakan metode if else
     dengan pencocokan session role, jika yg login admin side bar yg muncul semuanya,
     tp jika sesion yang direkam bukan admin yg muncul hanya beberapa tampilan 
-->

<body translate="no">
     <div class="dashboard dashboard-compact">
          <div class="dashboard-nav">
               <header>
                    <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
               </header>

               <nav class="dashboard-nav-list">
                    <a <?= $_GET['page'] == 'home' ? 'link-success' : '' ?> href="?page=home" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <div class="dashboard-nav-dropdown">
                         <?php
                         if ($_SESSION['role'] == 'admin') {
                         ?>
                              <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                                   <i class="fas fa-users"></i> Halaman Menu </a>
                              <div class="dashboard-nav-dropdown-menu">
                                   <a <?= $_GET['page'] == 'menu' ? 'link-success' : '' ?> href="?page=menu" class="dashboard-nav-dropdown-item">Daftar Menu</a>
                                   <a <?= $_GET['page'] == 'kategori_menu' ? 'link-success' : '' ?>href="?page=kategori_menu" class="dashboard-nav-dropdown-item">Daftar Kategori Menu</a>
                              </div>
                         <?php
                         }
                         ?>
                    </div>
                    <div class="dashboard-nav-dropdown">
                         <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                              <i class="fas fa-users"></i> Halaman Transaksi </a>
                         <div class="dashboard-nav-dropdown-menu">
                              <a <?= $_GET['page'] == 'transaksi' ? 'link-success' : '' ?> href="?page=transaksi" class="dashboard-nav-dropdown-item">Transaksi</a>
                              <a <?= $_GET['page'] == 'laporan' ? 'link-success' : '' ?> href="?page=laporan" class="dashboard-nav-dropdown-item">Laporan Transaksi</a>
                         </div>
                    </div>
                    <?php
                    if ($_SESSION['role'] == 'admin') {
                    ?>
                         <a <?= $_GET['page'] == 'user' ? 'link-success' : '' ?> href="?page=user" class="dashboard-nav-item"><i class="fas fa-user"></i> User </a>
                         <a <?= $_GET['page'] == 'role' ? 'link-success' : '' ?> href="?page=role" class="dashboard-nav-item"><i class="fas fa-user"></i> Role User </a>
                    <?php
                    }
                    ?>


                    <a <?= $_GET['page'] == 'profil-user' ? 'link-success' : '' ?> href="?page=profil-user" class="dashboard-nav-item active"><i class="fas fa-user"></i>Profil user</a>
                    <a href="?page=logout" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
               </nav>
          </div>
          <!-- akhir dari body sidebar -->

          <!-- area konten body -->
          <div class="dashboard-app">
               <header class="dashboard-toolbar"><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
               <div class="dashboard-content">
                    <div class="container">
                         <div class="card">
                              <div class="card-body">

                                   <!-- sebuah proses switch untuk mengganti halaman 
                                   dengan tampilan tanpa harus membuat sebuah code baru di halaman lain -->

                                   <?php
                                   if ($_SESSION['role'] == 'admin') {
                                        if ($_GET) {
                                             $page = $_GET['page'];
                                             switch ($page) {
                                                  case 'home':
                                                       include('../home/home.php');
                                                       break;
                                                  case 'user':
                                                       include('../user/user.php');
                                                       break;
                                                  case 'profil-user':
                                                       include('../user/profil-user.php');
                                                       break;
                                                  case 'user-create':
                                                       include('../user/user-create.php');
                                                       break;
                                                  case 'user_detail-create':
                                                       include('../user/user_detail-create.php');
                                                       break;
                                                  case 'user-edit':
                                                       include('../user/user-edit.php');
                                                       break;
                                                  case 'user-update':
                                                       include('../user/user-update.php');
                                                       break;
                                                  case 'user-delete':
                                                       include('../user/user-delete.php');
                                                       break;
                                                  case 'role':
                                                       include('../role/role.php');
                                                       break;
                                                  case 'role-create':
                                                       include('../role/role-create.php');
                                                       break;
                                                  case 'role_detail-create':
                                                       include('../role/role_detail-create.php');
                                                       break;
                                                  case 'role-edit':
                                                       include('../role/role-edit.php');
                                                       break;
                                                  case 'role-update':
                                                       include('../role/role-update.php');
                                                       break;
                                                  case 'role-delete':
                                                       include('../role/role-delete.php');
                                                       break;
                                                  case 'kategori_menu':
                                                       include('../kategori_menu/kategori_menu.php');
                                                       break;
                                                  case 'kategori_menu-create':
                                                       include('../kategori_menu/kategori_menu-create.php');
                                                       break;
                                                  case 'kategori_menu-store':
                                                       include('../kategori_menu/kategori_menu-store.php');
                                                       break;
                                                  case 'kategori_menu-edit':
                                                       include('../kategori_menu/kategori_menu-edit.php');
                                                       break;
                                                  case 'kategori_menu-update':
                                                       include('../kategori_menu/kategori_menu-update.php');
                                                       break;
                                                  case 'kategori_menu-delete':
                                                       include('../kategori_menu/kategori_menu-delete.php');
                                                       break;
                                                  case 'menu':
                                                       include('../menu/menu.php');
                                                       break;
                                                  case 'menu-create':
                                                       include('../menu/menu-create.php');
                                                       break;
                                                  case 'menu-store':
                                                       include('../menu/menu-store.php');
                                                       break;
                                                  case 'menu-edit':
                                                       include('../menu/menu-edit.php');
                                                       break;
                                                  case 'menu-update':
                                                       include('../menu/menu-update.php');
                                                       break;
                                                  case 'menu-delete':
                                                       include('../menu/menu-delete.php');
                                                       break;
                                                  case 'transaksi':
                                                       include('../transaksi/transaksi.php');
                                                       break;
                                                  case 'transaksi-final':
                                                       include('../transaksi/transaksi-final.php');
                                                       break;
                                                  case 'transaksi-store':
                                                       include('../transaksi/transaksi-store.php');
                                                       break;
                                                  case 'transaksi_detail-create':
                                                       include('../transaksi/transaksi_detail-create.php');
                                                       break;
                                                  case 'transaksi_detail-store':
                                                       include('../transaksi/transaksi_detail-store.php');
                                                       break;
                                                  case 'transaksi_detail-delete':
                                                       include('../transaksi/transaksi_detail-delete.php');
                                                       break;
                                                  case 'transaksi_detail-update':
                                                       include('../transaksi/transaksi_detail-update.php');
                                                       break;
                                                  case 'invoice':
                                                       include('../../assets/invoice/index.php');
                                                       break;
                                                  case 'laporan':
                                                       include('../laporan/laporan.php');
                                                       break;
                                                  case 'laporan-cari':
                                                       include('../laporan/laporan-cari.php');
                                                       break;
                                                  case 'logout':
                                                       include('../login/logout.php');
                                                       break;
                                                  default:
                                                       echo '<center>Halaman Tidak Ada !</center>';
                                                       break;
                                             }
                                        }
                                   } else {
                                        if ($_GET) {
                                             $page = $_GET['page'];
                                             switch ($page) {
                                                  case 'home':
                                                       include('../home/home.php');
                                                       break;
                                                  case 'profil-user':
                                                       include('../user/profil-user.php');
                                                       break;
                                                  case 'kategori_menu':
                                                       include('../kategori_menu/kategori_menu.php');
                                                       break;
                                                  case 'kategori_menu-create':
                                                       include('../kategori_menu/kategori_menu-create.php');
                                                       break;
                                                  case 'kategori_menu-store':
                                                       include('../kategori_menu/kategori_menu-store.php');
                                                       break;
                                                  case 'kategori_menu-edit':
                                                       include('../kategori_menu/kategori_menu-edit.php');
                                                       break;
                                                  case 'kategori_menu-update':
                                                       include('../kategori_menu/kategori_menu-update.php');
                                                       break;
                                                  case 'kategori_menu-delete':
                                                       include('../kategori_menu/kategori_menu-delete.php');
                                                       break;
                                                  case 'menu':
                                                       include('../menu/menu.php');
                                                       break;
                                                  case 'menu-create':
                                                       include('../menu/menu-create.php');
                                                       break;
                                                  case 'menu-store':
                                                       include('../menu/menu-store.php');
                                                       break;
                                                  case 'menu-edit':
                                                       include('../menu/menu-edit.php');
                                                       break;
                                                  case 'menu-update':
                                                       include('../menu/menu-update.php');
                                                       break;
                                                  case 'menu-delete':
                                                       include('../menu/menu-delete.php');
                                                       break;
                                                  case 'transaksi':
                                                       include('../transaksi/transaksi.php');
                                                       break;
                                                  case 'transaksi-final':
                                                       include('../transaksi/transaksi-final.php');
                                                       break;
                                                  case 'transaksi-store':
                                                       include('../transaksi/transaksi-store.php');
                                                       break;
                                                  case 'transaksi_detail-create':
                                                       include('../transaksi/transaksi_detail-create.php');
                                                       break;
                                                  case 'transaksi_detail-store':
                                                       include('../transaksi/transaksi_detail-store.php');
                                                       break;
                                                  case 'transaksi_detail-delete':
                                                       include('../transaksi/transaksi_detail-delete.php');
                                                       break;
                                                  case 'transaksi_detail-update':
                                                       include('../transaksi/transaksi_detail-update.php');
                                                       break;
                                                  case 'invoice':
                                                       include('../../assets/invoice/index.php');
                                                       break;
                                                  case 'laporan':
                                                       include('../laporan/laporan.php');
                                                       break;
                                                  case 'laporan-cari':
                                                       include('../laporan/laporan-cari.php');
                                                       break;
                                                  case 'logout':
                                                       include('../login/logout.php');
                                                       break;
                                                  default:
                                                       echo '<center>Halaman Tidak Ada !</center>';
                                                       break;
                                             }
                                        }
                                   }

                                   ?>
                                   <!-- akhir dari proses switch -->
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- script yang didapat dari online -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <!-- script untuk tampilan admin -->
     <script src="../../assets/js/layout.js"></script>

     <!-- bootstrap js-->
     <script src="../../assets/js/bootstrap.bundle.js"></script>
</body>

</html>