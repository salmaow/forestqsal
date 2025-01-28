<?php
include 'connect.php';

$idlaporan = $_POST['idlaporan'];
$tgllaporan = $_POST['tgllaporan'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];

$sql = "INSERT INTO laporan (idlaporan, tgllaporan, lokasi, deskripsi) VALUES ('$idlaporan', '$tgllaporan', '$lokasi', '$deskripsi')";

if ($conn->query($sql) === TRUE) {
    header('Location: laporan_add.php');
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>