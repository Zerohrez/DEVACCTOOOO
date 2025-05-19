<?php
require 'koneksi.php';

$stmt = $conn->prepare("SELECT id, nama, email FROM siswa");
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID:" . $row['id'] . "| Nama:" . $row['nama'] . "|Email:" . $row['email'] . "\n";
    }
} else {
echo "Tidak ada data ditemukan \n";
}

$stmt->close();
$conn->close();

?>