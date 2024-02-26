<?php
include '../../koneksi_database.php';

if (isset($_POST['judul'])) {
    $sql = 'INSERT INTO buku(judul, no_isbn, penulis, penerbit, tahun, stok, harga_produk, harga_jual, ppn, diskon) VALUES("' . $_POST['judul'] . '","' . $_POST['no_isbn'] . '","' . $_POST['penulis'] . '","' . $_POST['penerbit'] . '","' . $_POST['tahun'] . '","' . $_POST['stok'] . '","' . $_POST['harga_produk'] . '","' . $_POST['harga_jual'] . '","' . $_POST['ppn'] . '","' . $_POST['diskon'] . '")';
    $conn->query($sql);
    header('Location: /dashboard/buku');
}

include '../layout/header.php';
include '../layout/sidebar.php';
?>

<div id="content-wrapper" class="d-flex flex-column">

    <div id="content">
        <?php include '../layout/topbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid container-wrap">

            <div class="wrap">
                <form action="" method="post" class="form-container shadow-sm form-book">
                    <div class="left">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="no_isbn" class="form-label">No ISBN</label>
                            <input type="num" class="form-control" id="no_isbn" name="no_isbn" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="num" class="form-control" id="tahun" name="tahun" aria-describedby="emailHelp" min="1900" max="2099">
                        </div>
                    </div>
                    <div class="right">
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="num" class="form-control" id="stok" name="stok" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input type="num" class="form-control" id="harga_produk" name="harga_produk" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="harga_jual" class="form-label">Harga Jual</label>
                            <input type="num" class="form-control" id="harga_jual" name="harga_jual" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="ppn" class="form-label">PPN</label>
                            <input type="num" class="form-control" id="ppn" name="ppn" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="num" class="form-control" id="diskon" name="diskon" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary bg-[#4e73df]">Tambah Buku</button>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

    <?php include '../layout/footer.php' ?>