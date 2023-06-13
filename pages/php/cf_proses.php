<?php
session_start();

include 'connector.php';
$user = $_SESSION['user'];
$nama = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO question VALUES (NULL, '$user', '$nama', '$message',NULL)";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:../ContactFormPage.php?message=success");
} else {
    echo "Error: " . mysqli_error($connect);
}
