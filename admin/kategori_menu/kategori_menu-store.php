
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     ini adalah menu query untuk memasukkan data ke dalm databases
-->
<?php
     $nama_kategori_menu      = $_POST['nama_kategori_menu'];
     $nama_foto     = $_FILES['photo_kategori_menu']['name'];

     //folder tempat simpan foto
     $target_lokasi           = "../../assets/image/kategori_menu/";

     // pindahkan gambar yang diupload ke lokasi tujuan
     move_uploaded_file($_FILES['photo_kategori_menu']['tmp_name'], $target_lokasi.$nama_foto);

     $query = $koneksi->query("INSERT INTO kategori_menu VALUES('','$nama_kategori_menu','$nama_foto')");
     if ($query) 
     {
          ?>
               <script>
                    window.alert('Data berhasil disimpan!');
                    window.location.href='admin.php?page=kategori_menu';
               </script>
          <?php
     }
     else
     {
          ?>
               <script>
                    window.alert('Data gagal disimpan!');
                    window.location.href='admin.php?page=kategori_menu-create';
               </script>
          <?php
     }
?>