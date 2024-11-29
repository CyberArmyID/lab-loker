<?php
include "../../../init.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    header('Location: '.$menuAdmin.'/auth/login.php');
    exit;
}

$email = @$_POST['email'];
$password = sha1(@$_POST['password']);


$getUser = "SELECT * FROM admin where email = '$email' and password = '$password'";
$resultQueryGetUser = $conn->query($getUser);
if($resultQueryGetUser->num_rows == 0){

    header('Location: '.$menuAdmin.'/auth/login.php' );
    exit();
}
$user = $resultQueryGetUser->fetch_assoc();
//generate session login
$accessLogin = bin2hex(random_bytes(32));
$_SESSION['accessLogin'] = $accessLogin;
$userID = $user['id'];
//insert to user_access_tokens
$sql = "INSERT INTO admin_access_tokens (admin_id, token) VALUES ('$userID','$accessLogin')";
$conn->query($sql);
header('Location: '.$menuAdminApplicant);
exit;
