
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     halaman untuk mengupdate data
-->
<?php
if ($_POST) {
    $id_user        = $_POST['id_user'];
    $nama_role_user = $_POST['nama_role_user'];
    $nama_user      = $_POST['nama_user'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $nama_foto      = $_FILES['photo_user']['name'];

    $nama_foto_lama = '';

    // ngehes pw
    if (!empty($password)) {
        $password = password_hash($password, PASSWORD_BCRYPT);
    }

    // nge cek klo ada foto yang di update
    if (!empty($nama_foto)) {
        // cari foto sebelumnya dari variabel $nama_foto_lama dari database 
        $query          = $koneksi->query("SELECT photo_user FROM user WHERE id_user ='$id_user'");
        $nama_foto_lama = $query->fetch_object()->photo_user;

        // Hapus foto lama klo ada
        if (!empty($nama_foto_lama)) {
            unlink("../../assets/image/user/$nama_foto_lama");
        }

        // Pindahkan foto baru ke file yg ditentukan
        $target_lokasi = "../../assets/image/user/";
        move_uploaded_file($_FILES['photo_user']['tmp_name'], $target_lokasi . $nama_foto);
    }

    if (empty($password) && empty($nama_foto)) {
        $query_update = $koneksi->query("UPDATE user
                                    SET id_role_user = '$nama_role_user',
                                        nama_user    = '$nama_user',
                                        username     = '$username'
                                    WHERE id_user   = '$id_user'");
    } elseif (empty($password)) {
        $query_update = $koneksi->query("UPDATE user
                                    SET id_role_user = '$nama_role_user',
                                        nama_user    = '$nama_user',
                                        username     = '$username',
                                        photo_user   = '$nama_foto'
                                    WHERE id_user   = '$id_user'");
    } elseif (empty($nama_foto)) {
        $query_update = $koneksi->query("UPDATE user
                                    SET id_role_user = '$nama_role_user',
                                        nama_user    = '$nama_user',
                                        username     = '$username',
                                        password     = '$password'
                                    WHERE id_user   = '$id_user'");
    } else {
        $query_update = $koneksi->query("UPDATE user
                                    SET id_role_user = '$nama_role_user',
                                        nama_user    = '$nama_user',
                                        username     = '$username',
                                        password     = '$password',
                                        photo_user   = '$nama_foto'
                                    WHERE id_user   = '$id_user'");
    }

    if ($query_update) {
        ?>
        <script>
            window.alert('Data Berhasil Diubah');
            window.location.href = '?page=user';
        </script>
    <?php
    } else {
        ?>
        <script>
            window.alert('Data Gagal Diubah');
            window.location.href = '?page=user';
        </script>
    <?php
    }
}
?>