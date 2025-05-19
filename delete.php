<?php
include "koneksi.php";
//data yang di hapus
$id = 2;

$stmt = $conn->prepare("DELETE FROM siswa WHERE id = ?");
$stmt->bind_param("i", $id);

if($stmt->execute()) {
    if($stmt->affected_rows > 0){
        echo "Data berhasil dihapus \n";
    } else {
        echo "Data gagal dihapus \n";
    }
}

$stmt->close();
$conn->close();
?>