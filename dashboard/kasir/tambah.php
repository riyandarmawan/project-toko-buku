<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

if (isset($_POST['nama'])) {
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_BCRYPT);

    $sql = 'INSERT INTO kasir(nama, alamat, telepon, status, username, password, akses) VALUES(
            "' . $_POST['nama'] . '",
            "' . $_POST['alamat'] . '",
            "' . $_POST['telepon'] . '",
            "offline",
            "' . $_POST['username'] . '",
            "' . $password . '",
            "' . $_POST['akses'] . '"
        )';
    $conn->query($sql);
    header('Location: /dashboard/kasir');
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
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control resize-none" id="alamat" name="alamat" aria-describedby="emailHelp" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <div class="relative">
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" required>
                            <label for="eye" class="absolute right-3 top-[7px] cursor-pointer"><i data-feather="eye"></i></label>
                            <input type="checkbox" class="hidden" id="eye">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="akses" class="form-label">Akses</label>
                        <select class="form-select" id="akses" name="akses" aria-describedby="emailHelp" aria-label="Default select example" required>
                            <option value="admin" selected>Admin</option>
                            <option value="kasir">Kasir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Tambah Kasir</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>