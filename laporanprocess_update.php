<?php
include 'connect.php';

$idlaporan = $_POST['idlaporan'];
$tgllaporan = $_POST['tgllaporan'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];

$sql = "UPDATE laporan SET tgllaporan='$tgllaporan', lokasi='$lokasi', deskripsi='$deskripsi' WHERE idlaporan='$idlaporan'";

if ($conn->query($sql) === TRUE) {
    header('Location: laporan_add.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>