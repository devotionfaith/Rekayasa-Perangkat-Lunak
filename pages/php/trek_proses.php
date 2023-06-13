<?php
session_start();
include 'connector.php';

$id_user = $_SESSION['user'];
$nama = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$people = $_POST['jumlahOrang'];
$biaya = $_POST['hiddenCost'];

$sql = "INSERT INTO booking_trek VALUES (NULL, '$id_user','$nama','$phone','$date','$people','$biaya',NULL )";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:../BookingTrekPage.php?message=success");
} else {
    header("location:../BookingTrekPage.php?message=gagal_booking");
}
