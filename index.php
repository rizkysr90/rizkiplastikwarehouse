<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM rizkibakery") or die(mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Gudang </title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <h1> Data Gudang </h1>
        <?php if (isset($_SESSION['username'])) : ?>
            <a href="tambah.php" class="btn btn-primary mb-4">+ Tambah Data</a>
        <?php endif; ?>
        <table class="table table-dark">
            <thead>
                <th>Kode Barang </th>
                <th>Nama Barang </th>
                <th>Stok Barang </th>
                <?php if (isset($_SESSION['username'])) : ?>
                    <th>Aksi </th>
                <?php endif; ?>
            </thead>
            </tbody>
            <?php
            foreach ($data as $baris) { ?>
                <tr>
                    <td><?php echo $baris['kd_roti'] ?></td>
                    <td><?php echo $baris['nama_roti'] ?></td>
                    <td><?php echo $baris['stok_roti'] ?></td>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <td>
                            <a href="update.php?kd_roti=<?php echo $baris['kd_roti'] ?>" class="btn btn-success"> Update </a>
                            <a href="delete.php?kd_roti=<?php echo $baris['kd_roti'] ?>" class="btn btn-danger"> Delete </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>