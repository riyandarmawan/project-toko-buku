<?php

include '../../koneksi_database.php';

$sql = 'DELETE FROM distributor WHERE id_distributor=' . $_GET['id'];

$conn->query($sql);

header('Location: distributor');
