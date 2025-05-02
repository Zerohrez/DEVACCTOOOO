?php
include "koneksi.php";
//data yang di hapus
$id = 2;

//query delete
$sql = "DELETE from siswa WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>