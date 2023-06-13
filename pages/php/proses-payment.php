<?php
session_start();
// Koneksi ke database
include "connector.php";
$booking = $_GET['value'];
$id = $_GET['id'];

if ($booking == 'camp') {
    $table = 'booking_camp';
} else if ($booking == 'trek') {
    $table = 'booking_trek';
} else if ($booking == 'pendopo') {
    $table = 'booking_pendopo';
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $metode = $_POST["metode_pembayaran"];
    $rekening = $_POST["rekening"];

    $sql = "UPDATE $table SET status = 'Paid', metode = '$metode', rekening = '$rekening' WHERE id = $id";
    $query = mysqli_query($connect, $sql);
    if ($query) {;
        header("location:../HistoryPage.php?message=success");
    } else {
        echo "Error: " . mysqli_error($connect);
        echo $table;
    }
}
