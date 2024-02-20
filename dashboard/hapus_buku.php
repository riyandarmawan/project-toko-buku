<?php 

include '../koneksi_database.php';

$sql = 'DELETE FROM buku WHERE id_buku='.$_GET['id'];

$conn->query($sql);

header('Location: buku.php');

?>