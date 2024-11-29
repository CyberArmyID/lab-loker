<?php

if(!$_SESSION['phone_number']){
    header('Location: '.$menuAuth.'/login.php');
    exit();
}
$phoneNumber = $_SESSION['phone_number'];

$otp = rand(1000, 9999);

$sql = "INSERT INTO otp (otp) VALUES ('$otp')";
$conn->query($sql);

?>