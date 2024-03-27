
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     halaman untuk query memasukkan data
-->

<?php
require('role.php');
    $nama_role_user    = $_POST['nama_role_user'];


    $query = $koneksi->query("INSERT INTO role_user VALUES ('', '$nama_role_user');
                        ");
    if ($query) {
        ?>
        <script>
            window.alert('Data berhasil disimpan')
            window.location.href='admin.php?page=role';
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert('Data Gagal disimpan')
            window.location.href='admin.php?page=role-create';
        </script>
        <?php
    }

?>