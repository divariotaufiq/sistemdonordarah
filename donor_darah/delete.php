<?php
include 'config.php';
$id = $_GET['id'];
$query = "DELETE FROM pendonor WHERE id=$id";
if (mysqli_query($conn, $query)) {
    header("Location: list_pendonor.php");
}
?>