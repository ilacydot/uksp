<?php
$host = "localhost";
$user = "kitasehati";
$password = "1212";
$database = "uks";

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

?>