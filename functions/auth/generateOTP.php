<?php

if(!$_SESSION['phone_number']){
    echo "<script>window.location.href = '{$menuAuth}/login.php';</script>";
    exit;
}
$phoneNumber = $_SESSION['phone_number'];

$otp = rand(1000, 9999);

$sql = "INSERT INTO otp (otp) VALUES ('$otp')";
$conn->query($sql);

?>