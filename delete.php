<?php
include 'koneksi.php';

if (!$_SESSION['username']) {
    header('Location: login.php');
}

$kd_barang = $_GET['kd_barang'];
$query = mysqli_query($koneksi, "DELETE FROM Gudang WHERE kd_barang='$kd_barang'")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal hapus Data";
}
