<?php
include "koneksi.php";
//data yang diupdate
$id = 2;
$newEmail = "dimasnuri123@gmail.com";

//query update
$sql = "UPDATE siswa SET email = '$newEmail' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
