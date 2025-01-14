
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     menampilkan data yg berada di database lebh spesikfiknya table menu
-->


<?php
include('../login/login-session-cek.php');
?>
<br>
<center>
    <h2>Data Menu Restoran</h2>
</center>
<a href="?page=menu-create">
    <button class="btn btn-success mb-2">Tambahkan Menu</button>
</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Kategori Menu</th>
        <th>Nama menu</th>
        <th>Deskripsi menu</th>
        <th>Harga Menu</th>
        <th>Status Menu</th>
        <th>Foto</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query(" SELECT * FROM menu JOIN kategori_menu
                                ON menu.id_kategori_menu = kategori_menu.id_kategori_menu");
    while ($hasil = $query->fetch_object()) {
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil->nama_kategori_menu ?></td>
            <td><?= $hasil->nama_menu ?></td>
            <td><?= $hasil->deskripsi_menu ?></td>
            <td>Rp.<?= number_format($hasil->harga_menu) ?></td>
            <td><?= $hasil->status_menu ?></td>
            <td>
                <img width="100" class="img-fluid" src="../../assets/image/menu/<?= $hasil->photo_menu ?>">
            </td>
            <td>|
                <a style="text-decoration:none" href="?page=menu-edit&id_menu=<?= $hasil->id_menu ?>">
                    <i class="fa-solid fa-pen-to-square fa-sm" style="color: #005eff;"></i>
                </a>
                |
                <a style="text-decoration:none" href="?page=menu-delete&id_menu=<?= $hasil->id_menu ?>" onclick="return confirm ('are you sure?')">
                    <i class="fa-solid fa-trash fa-sm" style="color: #ff0000;"></i>
                </a>|
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>
<br>
<br>