<?php

$accessToken = $_SESSION['accessLogin'];

$getUser = "SELECT users.* FROM users 
            JOIN user_access_tokens ON users.id = user_access_tokens.user_id
            WHERE user_access_tokens.token='$accessToken'";
$result = $conn->query($getUser);
if ($result->num_rows == 0) {
    echo "<script>window.location.href = '{$menuAuth}/login.php';</script>";
    exit;
}
$user = $result->fetch_assoc();
$userID = $user['id'];

$getData = "SELECT jobs.*,user_jobs.status FROM user_jobs
                   JOIN jobs ON user_jobs.job_id = jobs.id
            WHERE user_jobs.user_id = '$userID'";

$result = $conn->query($getData);