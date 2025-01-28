<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM penanganan WHERE idpenanganan='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: penanganan_add.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>