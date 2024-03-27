
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     halaman untuk query insert data
-->
<?php
if ($_POST) {
    $nama_role_user         = $_POST['nama_role_user'];
    $nama_user              = $_POST['nama_user'];
    $username               = $_POST['username'];
    $password               = $_POST['password'];
    $nama_foto     = $_FILES['photo_user']['name'];

    //folder tempat simpan foto
    $target_lokasi           = "../../assets/image/user/";

    // pindahkan gambar yang diupload ke lokasi tujuan
    move_uploaded_file($_FILES['photo_user']['tmp_name'], $target_lokasi . $nama_foto);

    $password = password_hash($password, PASSWORD_BCRYPT);

    $query_insert = $koneksi->query("INSERT INTO user (id_role_user,nama_user,username,password,photo_user)
                                  VALUES('$nama_role_user','$nama_user','$username','$password','$nama_foto')");
    if ($query_insert) {
?>
        <script>
            window.alert('Data Berhasil Ditambahkan');
            window.location.href = '?page=user';
        </script>
    <?php
    } else {
    ?>
        <script>
            window.alert('Data Gagal Ditambahkan');
            window.location.href = '?page=user';
        </script>
<?php
    }
}
?>