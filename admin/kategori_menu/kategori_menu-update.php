
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     menu query update untuk memasukkan data kedalam databasesaads
-->

<?php
$id_kategori_menu     = $_POST['id_kategori_menu'];
$nama_kategori_menu    = $_POST['nama_kategori_menu'];
$nama_foto     = $_FILES['photo_kategori_menu']['name'];

if ($nama_foto == "") {
     $query_update = $koneksi->query("UPDATE kategori_menu SET 
                                        nama_kategori_menu = '$nama_kategori_menu'
                                        WHERE id_kategori_menu = '$id_kategori_menu'
                               ");
} else {
     $target_lokasi = "../../assets/image/kategori_menu/";
     $query = $koneksi->query("SELECT photo_kategori_menu FROM kategori_menu 
                              WHERE id_kategori_menu ='$id_kategori_menu'");
     $nama_foto_lama = $query->fetch_object()->photo_kategori_menu;

     unlink("../../assets/image/kategori_menu/$nama_foto_lama");
     move_uploaded_file($_FILES['photo_kategori_menu']['tmp_name'], $target_lokasi . $nama_foto);

     $query_update = $koneksi->query("UPDATE kategori_menu SET 
                                        nama_kategori_menu = '$nama_kategori_menu',
                                        photo_kategori_menu = '$nama_foto'
                                        WHERE id_kategori_menu = '$id_kategori_menu'
                               ");
}
if ($query_update) {
?>
     <script>
          window.alert('Data berhasil diupdate');
          window.location.href = '?page=kategori_menu';
     </script>
<?php
} else {
?>
     <script>
          window.alert('Data gagal diupdate');
          window.location.href = '?page=kategori_menu';
     </script>
<?php
}
?>