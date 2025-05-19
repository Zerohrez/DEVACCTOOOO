<?php
include "koneksi.php";

//data yang dimasukkan
$nama = "Barakacuk";
$email = "barakacuk@gmail.com";

$stmt = $conn->prepare('INSERT INTO siswa (nama, email) VALUES (?, ?)');
$stmt->bind_param("ss", $nama, $email);

if($stmt->execute()) {
    echo "Data berhasil ditambahkan. ID:" . $stmt->insert_id. "\n";
} else {
    echo "Error:" . $stmt->error. "\n";
}

$stmt->close();
$conn->close();
?>