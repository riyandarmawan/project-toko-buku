<?php
session_start();

include '../../koneksi_database.php';
$sql = 'UPDATE kasir SET status="offline" WHERE username="' . $_SESSION['login'] . '"';
$conn->query($sql);

session_destroy();
session_reset();
session_abort();
session_unset();
header('Location: /');
