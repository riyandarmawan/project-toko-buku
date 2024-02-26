<?php
include '../../koneksi_database.php';

$sql = 'SELECT * FROM kasir';

if (isset($_GET['search'])) {
    $sql = 'SELECT * FROM kasir WHERE nama LIKE "%' . $_GET['search'] . '%" OR alamat LIKE "%' . $_GET['search'] . '%" OR telepon LIKE "%' . $_GET['search'] . '%"';
}

$results = $conn->query($sql);

include '../layout/header.php';
include '../layout/sidebar.php';

$sql = 'SELECT * FROM kasir WHERE username="' . $_SESSION['login'] . '"';
$login = $conn->query($sql)->fetch_assoc();
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <?php if ($login['akses'] === 'admin') : ?>
                <a href="/dashboard/kasir/tambah.php" class="btn btn-primary mb-3">Tambah Kasir</a>
            <?php endif; ?>

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
                                <td>
                                    <div class="flex items-center gap-1">
                                        <div class="w-2 h-2 rounded-full bg-<?= $result['status'] === 'online' ? 'green' : 'red' ?>-500"></div>
                                        <p><?= $result['status'] ?></p>
                                    </div>
                                </td>
                                <td><?= $result['username'] ?></td>
                                <td><?= $result['akses'] ?></td>
                                <?php if ($login['akses'] === 'admin') : ?>
                                    <td>
                                        <a href="/dashboard/kasir/ubah.php?id=<?= $result['id_kasir'] ?>" class="btn btn-warning text-slate-800 hover:text-slate-800 active:text-slate-800 focus:text-slate-800">Ubah</a>
                                        <a href="/dashboard/kasir/ubah-password.php?id=<?= $result['id_kasir'] ?>" class="btn btn-warning text-slate-800 hover:text-slate-800 active:text-slate-800 focus:text-slate-800">Ubah password</a>
                                        <a href="/dashboard/kasir/hapus.php?id=<?= $result['id_kasir'] ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <?php if (empty($result)) : ?>
                    <p class="text-center">Kasir tidak tersedia</p>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>