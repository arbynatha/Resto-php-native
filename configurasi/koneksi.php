<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'resto_arbynatha';

$koneksi = mysqli_connect($host, $username, $password, $database);

if ($koneksi->connect_error) {
     die("Koneksi Gagal !" . $koneksi->connect_error);
}
