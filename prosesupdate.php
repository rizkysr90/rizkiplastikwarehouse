<?php
include 'koneksi.php';

if (!$_SESSION['username']) {
    header('Location: login.php');
}


$id_barang = $_GET['id_barang'];
$nama_barang = $_GET['nama_barang'];
$stok_barang = $_GET['stok_barang'];


$query = mysqli_query($koneksi, "UPDATE rizkibakery SET id_barang='$id_barang', nama_barang='$nama_barang', stok_barang='$stok_barang'")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal Update";
}
