<?php
session_start();

include '../../koneksi_database.php';
$sql = 'UPDATE kasir SET status="online" WHERE telepon="' . $_SESSION['telepon'] . '"';
$conn->query($sql);

session_destroy();
session_reset();
session_abort();
session_unset();
header('Location: /');
