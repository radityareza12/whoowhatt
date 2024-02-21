<?php
// konfigurasi database
$databaseHost = 'localhost';
$databaseName = 'db_aplikasihpengaduan';
$databaseUsername = 'root';
$databasePassword = '';

// membuat koneksi database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// menampilkan error ketika koneksi tidak berhasil
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
