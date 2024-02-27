<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

if (isset($_POST['nama'])) {
    $sql = 'UPDATE kasir 
            SET nama="' . $_POST['nama'] . '",
                alamat="' . $_POST['alamat'] . '", 
                telepon="' . $_POST['telepon'] . '", 
                username="' . $_POST['username'] . '", 
                akses="' . $_POST['akses'] . '" 
            WHERE id_kasir=' . $_GET['id'];
    $conn->query($sql);
    header('Location: /dashboard/kasir');
}

$sql = 'SELECT * FROM kasir WHERE id_kasir=' . $_GET['id'];

$kasir = $conn->query($sql)->fetch_assoc();
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" autofocus value="<?= $kasir['nama'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control resize-none" id="alamat" name="alamat" aria-describedby="emailHelp" rows="4" value="<?= $kasir['alamat'] ?>" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" value="<?= $kasir['telepon'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?= $kasir['username'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="akses" class="form-label">Akses</label>
                        <select class="form-select" id="akses" name="akses" aria-describedby="emailHelp" aria-label="Default select example" required>
                            <option value="admin" selected>Admin</option>
                            <option value="kasir">Kasir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Ubah Kasir</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>