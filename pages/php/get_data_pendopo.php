<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "tankaman_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$tanggal = $_GET['tanggal'];

$sql = "SELECT name, tanggal, start_time, end_time FROM booking_pendopo WHERE tanggal = '$tanggal'";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
