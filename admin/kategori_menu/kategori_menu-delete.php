
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     ini adalah menu untuk menghapus kategori menu 
-->
<?php
$id_kategori_menu = $_GET['id_kategori_menu'];
$query_delete = $koneksi->query("DELETE FROM kategori_menu WHERE id_kategori_menu = '$id_kategori_menu'");

if ($query_delete) {
     ?>
          <script>
               window.alert('Data berhasil di DELETE !');
               window.location.href='?page=kategori_menu';
          </script>
     <?php
}else{
     ?>
          <script>
               window.alert('Data gagal di DELETE !');
               window.location.href='?page=kategori_menu';
          </script>
     <?php
}
?>