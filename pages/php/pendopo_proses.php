<?php
session_start();
// Koneksi ke database
include "connector.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_user = $_SESSION['user'];
    $nama = $_POST['name'];
    $telepon = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $tanggalFormatted = date('Y-m-d', strtotime($tanggal));
    $jamMasuk = $_POST['jamMasuk'];
    $jamKeluar = $_POST['jamKeluar'];
    $masuk = new DateTime("2000-01-01 " . $jamMasuk);
    $keluar = new DateTime("2000-01-01 " . $jamKeluar);
    $selisih = $masuk->diff($keluar);
    $selisihJam = $selisih->h + ($selisih->days * 24);
    $jumlahduajam = $selisih->h / 2;
    $cost = $jumlahduajam * 100000;

    $sql = "SELECT COUNT(*) AS count FROM booking_pendopo WHERE tanggal = '$tanggalFormatted' AND start_time<= '$jamKeluar' AND end_time >= '$jamMasuk'";
    $query = mysqli_query($connect, $sql);
    $result = $query->fetch_assoc();
    if ($result['count'] > 0) {
        header("location:../BookingPendopo.php?message=gagalbooking");
    } else {
        $insert = "INSERT INTO booking_pendopo VALUES (NULL, '$id_user','$nama','$telepon','$tanggal','$jamMasuk','$jamKeluar','$cost',NULL )";
        $query = mysqli_query($connect, $insert);
        if ($query) {;
            header("location:../BookingPendopo.php?message=success");
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    }
}
