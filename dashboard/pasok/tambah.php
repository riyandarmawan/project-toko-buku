<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

if (isset($_POST['id_distributor'])) {
    $sql = 'INSERT INTO pasok(id_distributor, id_buku, jumlah, tanggal) VALUES("' . $_POST['id_distributor'] . '","' . $_POST['id_buku'] . '","' . $_POST['jumlah'] . '","' . $_POST['tanggal'] . '")';
    $conn->query($sql);
    header('Location: pasok');
}
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm">
                    <div class="mb-3">
                        <label for="id_distributor" class="form-label">Id Distributor</label>
                        <input type="num" class="form-control" id="id_distributor" name="id_distributor" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="id_buku" class="form-label">Id Buku</label>
                        <input type="num" class="form-control" id="id_buku" name="id_buku" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="num" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Tambah Buku</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>