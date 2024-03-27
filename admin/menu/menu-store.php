
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     query untuk memsukkan data baru ke dalam table menu di database
-->

<?php
$nama_kategori_menu     = $_POST['nama_kategori_menu'];
$nama_menu              = $_POST['nama_menu'];
$deskripsi_menu         = $_POST['deskripsi_menu'];
$harga_menu             = $_POST['harga_menu'];
$status_menu            = $_POST['status_menu'];
$nama_foto     = $_FILES['photo_menu']['name'];

//folder tempat simpan foto
$target_lokasi           = "../../assets/image/menu/";

// pindahkan gambar yang diupload ke lokasi tujuan
move_uploaded_file($_FILES['photo_menu']['tmp_name'], $target_lokasi . $nama_foto);


$query = $koneksi->query("INSERT INTO menu VALUES('','$nama_kategori_menu','$nama_menu','$deskripsi_menu','$harga_menu','$status_menu','$nama_foto')");
if ($query) {
?>
    <script>
        window.alert('Data berhasil disimpan!');
        window.location.href = 'admin.php?page=menu';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data gagal disimpan!');
        window.location.href = 'admin.php?page=menu-create';
    </script>
<?php
}
?>