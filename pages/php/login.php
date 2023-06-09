<?php
session_start();

include 'connector.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['user'] = $data['id'];
    $_SESSION['status'] = "login";
    header("location: ../HomePage.php");
} else {
    header("location: ../LoginPage.php?message=failed");
}
