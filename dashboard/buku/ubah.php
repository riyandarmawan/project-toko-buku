<?php
include '../layout/header.php';
include '../layout/sidebar.php';

include '../../koneksi_database.php';

if (isset($_POST['submit'])) {
    $sql = 'UPDATE buku SET judul="' . $_POST['judul'] . '", no_isbn="' . $_POST['no_isbn'] . '", penulis="' . $_POST['penulis'] . '", penerbit="' . $_POST['penerbit'] . '", tahun="' . $_POST['tahun'] . '", stok="' . $_POST['stok'] . '", harga_produk="' . $_POST['harga_produk'] . '", harga_jual="' . $_POST['harga_jual'] . '", ppn="' . $_POST['ppn'] . '", diskon="' . $_POST['diskon'] . '" WHERE id_buku=' . $_GET['id'];
    $conn->query($sql);
    header('Location: /dashboard/buku/');
}

$sql = 'SELECT * FROM buku WHERE id_buku=' . $_GET['id'];

$buku = $conn->query($sql)->fetch_assoc();
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm form-book">
                    <div class="left">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" value="<?= $buku['judul'] ?>" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="no_isbn" class="form-label">No ISBN</label>
                            <input type="num" class="form-control" id="no_isbn" name="no_isbn" aria-describedby="emailHelp" value="<?= $buku['no_isbn'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="<?= $buku['penulis'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" aria-describedby="emailHelp" value="<?= $buku['penerbit'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="num" class="form-control" id="tahun" name="tahun" aria-describedby="emailHelp" min="1900" max="2099" value="<?= $buku['tahun'] ?>" required>
                        </div>
                    </div>
                    <div class="right">
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="num" class="form-control" id="stok" name="stok" aria-describedby="emailHelp" value="<?= $buku['stok'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input type="num" class="form-control" id="harga_produk" name="harga_produk" aria-describedby="emailHelp" value="<?= $buku['harga_produk'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga_jual" class="form-label">Harga Jual</label>
                            <input type="num" class="form-control" id="harga_jual" name="harga_jual" aria-describedby="emailHelp" value="<?= $buku['harga_jual'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="ppn" class="form-label">PPN</label>
                            <input type="num" class="form-control" id="ppn" name="ppn" aria-describedby="emailHelp" value="<?= $buku['ppn'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="num" class="form-control" id="diskon" name="diskon" aria-describedby="emailHelp" value="<?= $buku['diskon'] ?>" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary bg-[#4e73df]">Ubah Buku</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>