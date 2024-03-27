
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09 

     halaman untuk mengedit halaman menu
-->

<?php
$id_menu = $_GET['id_menu'];
$query = $koneksi->query("SELECT * FROM menu JOIN kategori_menu 
                                ON menu.id_kategori_menu = kategori_menu.id_kategori_menu
                                WHERE id_menu = '$id_menu'");
$hasil = $query->fetch_object();
?>
<center>
    <br>
    <h2>ubah Data Menu</h2>
    <br>
    <table width="400px">
        <tr>
            <td>
                <form action="?page=menu-update" method="POST" enctype="multipart/form-data">
                    <input type="text" value="<?= $hasil->id_menu ?>" name="id_menu" hidden>

                    <select class="form-control mb-2" name="nama_kategori_menu">
                        <option value="<?php echo
                                        $hasil->id_kategori_menu ?>">
                            <?php echo $hasil->nama_kategori_menu ?></option>
                        <?php
                        $select_kategori = $koneksi->query("SELECT *FROM kategori_menu");
                        while ($hasil_kategori = $select_kategori->fetch_object()) {
                        ?>
                            <option value="<?php echo
                                            $hasil_kategori->id_kategori_menu ?>">
                                <?php echo $hasil_kategori->nama_kategori_menu ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                    <input class="form-control mb-2" value="<?= $hasil->nama_menu ?>" name="nama_menu" placeholder="Nama Menu">
                    <input class="form-control mb-2" value="<?= $hasil->deskripsi_menu ?>" name="deskripsi_menu" placeholder="Deskripsi Menu">
                    <input class="form-control mb-2" value="<?= $hasil->harga_menu ?>" name="harga_menu" placeholder="Harga Menu">

                    <select class="form-control mb-2" name="status_menu">
                        <option value="<?php echo $hasil->status_menu ?>" selected> <?php echo $hasil->status_menu ?> </option>
                        <option value="tersedia" selected> Tersedia </option>
                        <option value="habis"> Habis </option>
                    </select>
                    <input class="form-control mb-2" value="<?= $hasil->photo_menu ?>" type="file" name="photo_menu">
                    <br>

                    <center><img width="250" src="../../assets/image/menu/<?= $hasil->photo_menu ?>" alt="gambar error">
                        <div class="text-form mb-2">*preview gambar lama <br> <?= $hasil->photo_menu ?></div>
                    </center>
                    <center><button class="btn btn-success" type="submit">Simpan</button></center>
                </form>
            </td>
        </tr>
    </table>
</center>