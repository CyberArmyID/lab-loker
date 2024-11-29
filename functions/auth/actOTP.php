<?php
include "../../init.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: '.$menuAuth.'/login.php');
    exit;
}


$phoneNumber = $_POST['phoneNumber'];
$otp = $_POST['otp'];

//validate otp
$validateOTP = "SELECT * from otp where otp='$otp' and is_active = 0";
$result = $conn->query($validateOTP);
if($result->num_rows > 0){
//    update is active
    $updateIsActive = "UPDATE otp SET is_active = 1 where otp='$otp'";
    $conn->query($updateIsActive);
}

//get user id
$getUser = "SELECT * from users where phone_number='$phoneNumber'";
$resultQueryGetUser = $conn->query($getUser);
if($resultQueryGetUser->num_rows == 0){
    header('Location: login');
    exit();
}
$user = $resultQueryGetUser->fetch_assoc();
//generate session login
$accessLogin = bin2hex(random_bytes(32));
$_SESSION['accessLogin'] = $accessLogin;
$userID = $user['id'];
//insert to user_access_tokens
$sql = "INSERT INTO user_access_tokens (user_id, token) VALUES ('$userID','$accessLogin')";
$conn->query($sql);

$conn->close();

header('Location: '.$menuProfile.'/profile/index.php');
exit();
