
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     query untuk melakukan perintah update di table menu pada database
-->

<?php
$id_menu                = $_POST['id_menu'];
$nama_kategori_menu     = $_POST['nama_kategori_menu'];
$nama_menu              = $_POST['nama_menu'];
$deskripsi_menu         = $_POST['deskripsi_menu'];
$harga_menu             = $_POST['harga_menu'];
$status_menu            = $_POST['status_menu'];
$nama_foto     = $_FILES['photo_menu']['name'];

if ($nama_foto == "") {
    $query = $koneksi->query("UPDATE menu SET
                    
                            id_kategori_menu = '$nama_kategori_menu',
                            nama_menu = '$nama_menu',
                            deskripsi_menu = '$deskripsi_menu',
                            harga_menu = '$harga_menu',
                            status_menu = '$status_menu'
                            WHERE id_menu = '$id_menu'
                               ");
} else {
    $target_lokasi = "../../assets/image/menu/";
    $query = $koneksi->query("SELECT photo_menu FROM menu 
                             WHERE id_menu ='$id_menu'");
    $nama_foto_lama = $query->fetch_object()->photo_menu;

    unlink("../../assets/image/menu/$nama_foto_lama");
    move_uploaded_file($_FILES['photo_menu']['tmp_name'], $target_lokasi . $nama_foto);

    $query_update = $koneksi->query("UPDATE menu SET 
                                        id_kategori_menu = '$nama_kategori_menu',
                                        nama_menu = '$nama_menu',
                                        deskripsi_menu = '$deskripsi_menu',
                                        harga_menu = '$harga_menu',
                                        status_menu = '$status_menu',
                                        photo_menu = '$nama_foto'
                                       WHERE id_menu = '$id_menu'
                              ");
}

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
        window.location.href = 'admin.php?page=menu-edit';
    </script>
<?php
}
?>