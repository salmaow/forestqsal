<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM laporan WHERE idlaporan='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: laporan_add.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>