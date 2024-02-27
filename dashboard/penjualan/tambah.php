<?php

include '../../koneksi_database.php';

$sql = 'SELECT buku.id_buku, buku.judul, buku.harga_jual
        FROM penjualan
        RIGHT JOIN buku ON penjualan.id_buku = buku.id_buku';

$books = $conn->query($sql);

$sql = 'SELECT kasir.id_kasir, kasir.nama
        FROM penjualan
        RIGHT JOIN kasir ON penjualan.id_kasir = kasir.id_kasir';

$cashiers = $conn->query($sql);

if (isset($_POST['submit'])) {
    $sql = 'SELECT * FROM buku WHERE id_buku=' . $_POST['id_buku'];

    $sql = 'INSERT INTO penjualan(id_buku, id_kasir, jumlah, total, tanggal)
            VALUES (
                "' . $_POST['id_buku'] . '",
                "' . $_POST['id_kasir'] . '",
                "' . $_POST['jumlah'] . '",
                "' . $_POST['total'] . '",
                "' . $_POST['tanggal'] . '"
            )';

    $conn->query($sql);

    header('Location: /dashboard/penjualan');
}

include '../layout/header.php';
include '../layout/sidebar.php';

?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm">
                    <div class="mb-3">
                        <label for="id_buku" class="form-label">Judul buku</label>
                        <select class="form-select" id="id_buku" name="id_buku" aria-describedby="emailHelp" aria-label="Default select example">
                            <?php foreach ($books as $book) : ?>
                                <option value="<?= $book['id_buku'] ?>"><?= $book['judul'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="harga" class="form-label">Harga buku</label>
                        <input type="num" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" disabled>
                    </div> -->
                    <div class="mb-3">
                        <label for="id_kasir" class="form-label">Nama kasir</label>
                        <select class="form-select" id="id_kasir" name="id_kasir" aria-describedby="emailHelp" aria-label="Default select example">
                            <?php foreach ($cashiers as $cashier) : ?>
                                <option value="<?= $cashier['id_kasir'] ?>"><?= $cashier['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="num" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp">
                        <!-- <button type="button" class="btn btn-primary bg-[#4e73df] mt-3" id="count-button">Hitung total</button> -->
                    </div>
                    <!-- <div class="mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input type="num" class="form-control" id="total" name="total" aria-describedby="emailHelp" disabled>
                    </div> -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary bg-[#4e73df]">Tambah Penjualan</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- count -->
    <script src="/assets/js/count.js"></script>

    <?php include '../layout/footer.php' ?>