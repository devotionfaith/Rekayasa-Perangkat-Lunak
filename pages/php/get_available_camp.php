<?php

$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tankaman_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM camp_area WHERE id NOT IN (SELECT id_camp FROM booking_camp WHERE (start_date <= '$end_date' AND end_date >= '$start_date'))";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

header("Content-type: application/json");
echo json_encode($data);
