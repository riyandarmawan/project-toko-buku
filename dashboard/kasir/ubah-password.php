<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

$sql = 'SELECT * FROM kasir WHERE id_kasir=' . $_GET['id'];

$kasir = $conn->query($sql)->fetch_assoc();

if (isset($_POST['new_password'])) {
    if (password_verify($_POST['password'], $kasir['password'])) {
        $password = $_POST['new_password'];
        $password = password_hash($password, PASSWORD_BCRYPT);

        $sql = 'UPDATE kasir 
            SET password="' . $password . '"
            WHERE id_kasir=' . $_GET['id'];
        $conn->query($sql);
        header('Location: kasir');
    }
}
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm">
                    <h3 class="text-xl">Ubah password</h3>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password lama</label>
                        <div class="relative">
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Masukkan password lama">
                            <label for="eye" class="absolute right-3 top-[7px] cursor-pointer"><i data-feather="eye"></i></label>
                            <input type="checkbox" class="hidden" id="eye">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password baru</label>
                        <div class="relative">
                            <input type="password" class="form-control" id="new_password" name="new_password" aria-describedby="emailHelp" placeholder="Masukkan password baru">
                            <label for="eye" class="absolute right-3 top-[7px] cursor-pointer"><i data-feather="eye"></i></label>
                            <input type="checkbox" class="hidden" id="new-eye">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Ubah Password</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- password js -->
    <script src="/assets/js/password.js"></script>

    <?php include '../layout/footer.php' ?>