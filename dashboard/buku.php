<?php
include 'layout/header.php';
include 'layout/sidebar.php';

include '../koneksi_database.php';

$sql = 'SELECT * FROM buku';

$results = $conn->query($sql);
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include 'layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <a href="tambah_buku.php" class="btn btn-primary mb-3">Tambah Buku</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">No ISBN</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">PPN</th>
                            <th scope="col">Diskon</th>
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
                                <td><?= $result['no_isbn'] ?></td>
                                <td><?= $result['penulis'] ?></td>
                                <td><?= $result['penerbit'] ?></td>
                                <td><?= $result['tahun'] ?></td>
                                <td><?= $result['stok'] ?></td>
                                <td><?= $result['harga_produk'] ?></td>
                                <td><?= $result['harga_jual'] ?></td>
                                <td><?= $result['ppn'] ?></td>
                                <td><?= $result['diskon'] ?></td>
                                <td>
                                    <a href="ubah_buku.php?id=<?= $result['id_buku'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapus_buku.php?id=<?= $result['id_buku'] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include 'layout/footer.php' ?>