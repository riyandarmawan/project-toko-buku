<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

$sql = 'SELECT * FROM buku';

if (isset($_GET['search'])) {
    $sql = 'SELECT * FROM buku WHERE judul LIKE "%' . $_GET['search'] . '%" OR no_isbn LIKE "%' . $_GET['search'] . '%" OR penulis LIKE "%' . $_GET['search'] . '%" OR penerbit LIKE "%' . $_GET['search'] . '%" OR tahun LIKE "%' . $_GET['search'] . '%" OR stok LIKE "%' . $_GET['search'] . '%" OR harga_produk LIKE "%' . $_GET['search'] . '%" OR harga_jual LIKE "%' . $_GET['search'] . '%" OR ppn LIKE "%' . $_GET['search'] . '%" OR diskon LIKE "%' . $_GET['search'] . '%"';
}

$results = $conn->query($sql);
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Buku</a>

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
                                    <a href="ubah.php?id=<?= $result['id_buku'] ?>" class="btn btn-warning">Ubah</a>
                                    <a href="hapus.php?id=<?= $result['id_buku'] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <?php if (empty($result)) : ?>
                    <p class="text-center">Buku tidak tersedia</p>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>