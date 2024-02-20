<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

$sql = 'SELECT * FROM pasok';

if (isset($_GET['search'])) {
    $sql = 'SELECT * FROM pasok WHERE id_distributor LIKE "%' . $_GET['search'] . '%" OR id_buku LIKE "%' . $_GET['search'] . '%" OR jumlah LIKE "%' . $_GET['search'] . '%" OR tanggal LIKE "%' . $_GET['search'] . '%"';
}

$results = $conn->query($sql);
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Pasok</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id Distributor</th>
                            <th scope="col">Id Buku</th>
                            <th scope="col">Jumlah</th>
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
                                <td><?= $result['id_distributor'] ?></td>
                                <td><?= $result['id_buku'] ?></td>
                                <td><?= $result['jumlah'] ?></td>
                                <td><?= $result['tanggal'] ?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $result['id_pasok'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapus.php?id=<?= $result['id_pasok'] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <?php if (empty($result)) : ?>
                    <p class="text-center">Pasok tidak tersedia</p>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>