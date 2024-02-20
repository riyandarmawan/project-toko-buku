<?php
include 'layout/header.php';
include 'layout/sidebar.php';

include '../koneksi_database.php';

$sql = 'SELECT * FROM kasir';

$results = $conn->query($sql);
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include 'layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <a href="tambah_kasir.php" class="btn btn-primary mb-3">Tambah Kasir</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Status</th>
                            <th scope="col">Username</th>
                            <th scope="col">Akses</th>
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
                                <td><?= $result['nama'] ?></td>
                                <td><?= $result['alamat'] ?></td>
                                <td><?= $result['telepon'] ?></td>
                                <td><?= $result['status'] ?></td>
                                <td><?= $result['username'] ?></td>
                                <td><?= $result['akses'] ?></td>
                                <td>
                                    <a href="ubah_kasir.php?id=<?= $result['id_kasir'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapus_kasir.php?id=<?= $result['id_kasir'] ?>" class="btn btn-danger">Hapus</a>
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