<?php

include "connector.php";

$camp = "SELECT * FROM booking_camp WHERE status = 'notPaid'";
$result = mysqli_query($connect, $camp);

while ($row = mysqli_fetch_assoc($result)) {
    $waktuPembayaran = strtotime($row['booking_time']);
    $waktuSekarang = time();

    if (($waktuSekarang - $waktuPembayaran) >= (15 * 60)) {
        $updateSql = "UPDATE booking_camp SET status = 'expired' WHERE id = " . $row['id'];
        if (mysqli_query($connect, $updateSql)) {
        } else {
        }
    }
}

$trek = "SELECT * FROM booking_trek WHERE status = 'notPaid'";
$result2 = mysqli_query($connect, $trek);

while ($row = mysqli_fetch_assoc($result2)) {
    $waktuPembayaran = strtotime($row['booking_time']);
    $waktuSekarang = time();

    if (($waktuSekarang - $waktuPembayaran) >= (15 * 60)) {
        $updateSql = "UPDATE booking_trek SET status = 'expired' WHERE id = " . $row['id'];
        if (mysqli_query($connect, $updateSql)) {
        } else {
        }
    }
}

$pendopo = "SELECT * FROM booking_pendopo WHERE status = 'notPaid'";
$result3 = mysqli_query($connect, $pendopo);

while ($row = mysqli_fetch_assoc($result3)) {
    $waktuPembayaran = strtotime($row['booking_time']);
    $waktuSekarang = time();

    if (($waktuSekarang - $waktuPembayaran) >= (15 * 60)) {
        $updateSql = "UPDATE booking_pendopo SET status = 'expired' WHERE id = " . $row['id'];
        if (mysqli_query($connect, $updateSql)) {
        } else {
        }
    }
}

mysqli_close($connect);
