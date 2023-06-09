<?php
include 'connector.php';

$id = '';
for ($i = 0; $i < 4; $i++) {
    $id .= rand(0, 9);
}
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$sql    = "INSERT INTO accounts VALUES('$id', '$email', '$phone', '$username', '$password')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:../LoginPage.php?message=Success");
} else {
    header("location:register.php?message=failed");
}
