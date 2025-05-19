<?php
require "koneksi.php";
//data yang diupdate
$id = 2;
$newEmail = "hohohoho@gmail.com";

//query update
$stmt = $conn->prepare("UPDATE siswa SET email = ? WHERE id = ?");
$stmt->bind_param("si", $newEmail, $id);

if($stmt->execute()){
    if($stmt->affected_rows > 0){
        echo "Data berhasil diupdate \n";
    } else {
        echo "Tidak ada data yang diupdate \n";
    }
}

$stmt->close();
$conn->close();
?>
