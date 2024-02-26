<?php

include '../../koneksi_database.php';

$sql = 'SELECT penjualan.*, buku.judul, kasir.nama
        FROM penjualan
        left JOIN buku ON penjualan.id_buku = buku.id_buku
        left JOIN kasir ON penjualan.id_kasir = kasir.id_kasir';

if (isset($_GET['search'])) {
    $sql = 'SELECT penjualan.*, buku.judul, kasir.nama
            FROM kasir 
            left JOIN buku ON penjualan.id_buku = buku.id_buku
            left JOIN kasir ON penjualan.id_buku = kasir.id_kasir
            WHERE judul LIKE "%' . $_GET['search'] . '%" 
            OR nama LIKE "%' . $_GET['search'] . '%" 
            OR jumlah LIKE "%' . $_GET['search'] . '%"
            OR total LIKE "%' . $_GET['search'] . '%"
            OR tanggal LIKE "%' . $_GET['search'] . '%"';
}

$results = $conn->query($sql);

include '../layout/header.php';
include '../layout/sidebar.php';

?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <a href="/dashboard/penjualan/tambah.php" class="btn btn-primary mb-3">Tambah Penjualan</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul buku</th>
                            <th scope="col">Nama Kasir</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($results as $result) :
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $result['judul'] ?></td>
                                <td><?= $result['nama'] ?></td>
                                <td><?= $result['jumlah'] ?></td>
                                <td>Rp. <?= number_format($result['total'], 0, ',', '.') ?></td>
                                <td><?= $result['tanggal'] ?></td>
                                <td>
                                    <a href="/dashboard/penjualan/ubah.php?id=<?= $result['id_penjualan'] ?>" class="btn btn-warning text-slate-800 hover:text-slate-800 active:text-slate-800 focus:text-slate-800">Ubah</a>
                                    <a href="/dashboard/penjualan/hapus.php?id=<?= $result['id_penjualan'] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <?php if (empty($result)) : ?>
                    <p class="text-center">Data penjualan tidak tersedia</p>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>