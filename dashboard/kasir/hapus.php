<?php

include '../../koneksi_database.php';

$sql = 'DELETE FROM kasir WHERE id_kasir=' . $_GET['id'];

$conn->query($sql);

header('Location: kasir');
