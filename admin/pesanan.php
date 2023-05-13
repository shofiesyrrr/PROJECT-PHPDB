<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>

<h1 class="mt-4">Pesanan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Pesanan</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <a class="btn btn-primary" href="index.php?hal=form_pesanan">Create Pesanan</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.HP</th>
                    <th>Email</th>
                    <th>Jumlah</th>
                    <th>Produk ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.HP</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Produk ID</th>
                    <th>Action</th>
                </tr>
            </tfoot>

            <tbody>
                <?php
                $nomor  = 1;
                foreach ($rs as $row) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['nama_pemesan'] ?></td>
                        <td><?= $row['alamat_pemesan'] ?></td>
                        <td><?= $row['no_hp'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['jumlah_pesanan'] ?></td>
                        <td><?= $row['produk_id'] ?></td>
                        <td>
                            <a class="btn btn-success" href="index.php?hal=view_pesanan&id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-warning" href="index.php?hal=form_pesanan&idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="delete_pesanan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a> -->
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">

</table>