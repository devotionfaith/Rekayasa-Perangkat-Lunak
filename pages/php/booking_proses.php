<?php
session_start();
include 'connector.php';

$id_user = $_SESSION['user'];
$nama = $_POST['name'];
$phone = $_POST['phone'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$camp = $_POST['campArea'];
$biaya = $_POST['hiddenCost'];
$status = "notPaid";
$metode = "-";
$rekening = "-";

$sql = "INSERT INTO booking_camp VALUES (NULL, '$id_user','$nama','$phone','$start_date','$end_date','$camp','$biaya',NULL,'$status', '$metode', '$rekening' )";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:../BookingCampPage.php?message=success");
} else {
    header("location:../BookingCampPage.php?message=gagalbooking");
}
