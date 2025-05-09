<?php
include "koneksi.php";

//data yang dimasukkan
$nama = "Dimasukin";
$email = "dimasnuri@gmail.com";

//query insert
$sql = "INSERT INTO siswa (nama, email) VALUES ('$nama', '$email')";

if($conn->query($sql)){
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}
?>