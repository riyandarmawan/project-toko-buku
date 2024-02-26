<?php

include '../../koneksi_database.php';

$sql = 'DELETE FROM penjualan WHERE id_penjualan=' . $_GET['id'];

$conn->query($sql);

header('Location: /dashboard/penjualan/');
