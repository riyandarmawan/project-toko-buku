<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

if (isset($_POST['nama_distributor'])) {
    $sql = 'INSERT INTO distributor(nama_distributor, alamat, telepon) VALUES("' . $_POST['nama_distributor'] . '","' . $_POST['alamat'] . '","' . $_POST['telepon'] . '")';
    $conn->query($sql);
    header('Location: distributor');
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
                        <label for="nama_distributor" class="form-label">Nama Distributor</label>
                        <input type="text" class="form-control" id="nama_distributor" name="nama_distributor" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="num" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Tambah Distributor</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>