<?php

include '../../koneksi_database.php';

$sql = 'DELETE FROM pasok WHERE id_pasok=' . $_GET['id'];

$conn->query($sql);

header('Location: pasok');
