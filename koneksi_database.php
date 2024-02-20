<?php

$serverName = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($serverName, $username, $password, 'buku_riyan_darmawan');

if (!isset($conn)) echo 'Gagal cuy😫';
