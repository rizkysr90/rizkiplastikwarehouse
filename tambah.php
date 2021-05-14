<?php
include 'koneksi.php';

if (!$_SESSION['username']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data </title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <h1> Tambah Data Gudang </h1>
        <div class="col-md-6">
            <form action="prosestambah.php" method="post">
                <label for="kd_barang">Kode Barang</label>
                <input type="number" class="form-control" name="id_barang">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
                <label for="stok_barang">Stok Barang</label>
                <input type="number" class="form-control" name="stok_barang">
                <button class="btn btn-primary mt-2" type="submit" name="button"> Simpan Data</button>
            </form>
        </div>
    </div>
</body>

</html>