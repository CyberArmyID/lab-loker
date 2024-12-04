<?php
include "../../init.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<script>window.location.href = '{$menuAuth}/login.php';</script>";
    exit;
}
$phoneNumber = $_POST['phoneNumber'];

//validate if phoneNumber already registered

$isRegistered = "SELECT * FROM users WHERE phone_number = '$phoneNumber' LIMIT 1";
$result = $conn->query($isRegistered);

// $isRegistered false
if ($result->num_rows == 0) {
    $queryInsert = "INSERT INTO users (phone_number) VALUES ('$phoneNumber')";
    if ($conn->query($queryInsert) === TRUE) {
        echo "Nomor handphone berhasil ditambahkan!";
    } else {
        $_SESSION['error_message'] = "Error: " . $queryInsert . "<br>" . $conn->error;
        echo "<script>window.location.href = '{$menuAuth}/login.php';</script>";
        exit;
    }
} else {
    echo "Nomor handphone sudah terdaftar.";
}

$_SESSION['phone_number'] = $phoneNumber;
echo "<script>window.location.href = '{$menuAuth}/otp.php';</script>";
exit;
