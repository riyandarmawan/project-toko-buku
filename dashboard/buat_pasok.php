<?php
include 'layout/header.php';
include 'layout/sidebar.php';

if (isset($_POST['id-distributor'])) {
    include '../koneksi_database.php';
    $sql = 'INSERT INTO pasok(id_distributor, id_buku, jumlah, tanggal) VALUES("' . $_POST['id-distributor'] . '","' . $_POST['id-buku'] . '","' . $_POST['jumlah'] . '","' . $_POST['tanggal'] . '")';
    $conn->query($sql);
    echo 'Berhasil kah?';
}
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include 'layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm">
                    <div class="mb-3">
                        <label for="id-distributor" class="form-label">Id Distributor</label>
                        <input type="num" class="form-control" id="id-distributor" name="id-distributor" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="id-buku" class="form-label">Id Buku</label>
                        <input type="num" class="form-control" id="id-buku" name="id-buku" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="num" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Pasok</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include 'layout/footer.php' ?>