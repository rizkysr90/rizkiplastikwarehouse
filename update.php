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
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Update Data Gudang </h1>
        <?php
        $id_roti = $_GET['id_roti'];
        $data = mysqli_query($koneksi, "SELECT * FROM rizkibakery WHERE id_roti=$id_roti ") or die(mysqli_error($koneksi));
        $baris = mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
            <form action="prosesupdate.php" methode="post">
                <label for="id_barang">Kode Barang</label>
                <input type="number" class="form-control" name="id_barang" value="<?= $baris['id_barang']; ?>" readonly>
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?= $baris['nama_barang']; ?>">
                <label for="stok_barang ">Stok Barang</label>
                <input type="text" class="form-control" name="stok_barang" value="<?= $baris['stok_barang']; ?>">
                <button class="btn btn-primary mt-2" type="submit" name="button">Simpan Data</button>
            </form>
        </div>
    </div>
</body>

</html>