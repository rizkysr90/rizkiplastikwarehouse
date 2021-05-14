<?php
include 'koneksi.php';

if (!$_SESSION['username']) {
    header('Location: login.php');
}

$id_barang = $_POST['id_barang'];
$nama_roti = $_POST['nama_barang'];
$stok_roti = $_POST['stok_barang'];


$query = mysqli_query($koneksi, "INSERT INTO rizkibakery (kd_barang, nama_barang, stok_barang)
VAlUES ('$kd_barang', '$nama_barang', '$stok_barang') ")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal input Data";
}
