<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

if (isset($_POST['nama_distributor'])) {
    $sql = 'UPDATE distributor SET nama_distributor="' . $_POST['nama_distributor'] . '", alamat="' . $_POST['alamat'] . '", telepon="' . $_POST['telepon'] . '" WHERE id_distributor=' . $_GET['id'];
    $conn->query($sql);
    header('Location: distributor');
}

$sql = 'SELECT * FROM distributor WHERE id_distributor=' . $_GET['id'];

$distributor = $conn->query($sql)->fetch_assoc();
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
                        <input type="text" class="form-control" id="nama_distributor" name="nama_distributor" aria-describedby="emailHelp" value="<?= $distributor['nama_distributor'] ?>" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?= $distributor['alamat'] ?>" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="num" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" value="<?= $distributor['telepon'] ?>" autofocus required>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Ubah Distributor</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>