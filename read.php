<?php
include "koneksi.php";
//query select
$sql = "SELECT id, nama, email FROM siswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    //output data setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "\n" . "- Nama: " . $row['nama'] . "\n" . "- Email:" . $row['email'] . "\n";
    }
} else {
    echo " 0 hasil";
}
?>