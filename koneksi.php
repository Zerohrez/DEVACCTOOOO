<?php
$servername = "localhost";
$usename = "root";
$password = "";
$dbname = "devaccto";

//membuat koneksi
$conn = new mysqli($servername, $usename, $password, $dbname);

//cek koneksi
if ($conn->connect_error){
    die("Koneksi Gagal: " . $conn->connect_error);
}
echo "Koneksi Berhasil"
?>