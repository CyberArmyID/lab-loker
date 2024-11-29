<?php

$accessToken = $_SESSION['accessLogin'];

$getUser = "SELECT admin.* FROM admin 
            JOIN admin_access_tokens ON admin.id = admin_access_tokens.admin_id
            WHERE admin_access_tokens.token='$accessToken'";
$result = $conn->query($getUser);
if ($result->num_rows == 0) {
    var_dump("hmm");
    exit;
    header('Location: '.$host);
    exit();
}
$user = $result->fetch_assoc();
$adminID = $user['id'];




?>