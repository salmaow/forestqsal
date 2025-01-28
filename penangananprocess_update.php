<?php
include 'connect.php';

$idpenanganan = $_POST['idpenanganan'];
$idlaporan = $_POST['idlaporan'];
$tindakan = $_POST['tindakan'];
$status = $_POST['status'];

$sql = "UPDATE penanganan SET idlaporan='$idlaporan', tindakan='$tindakan', status='$status' WHERE idpenanganan='$idpenanganan'";

if ($conn->query($sql) === TRUE) {
    header('Location: penanganan_add.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>