<?php
include "../../../init.php";
include "../getUser.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
    exit;

}

$skill = $_POST["skill"];

$sql = "INSERT INTO skills (user_id, skill) VALUES ('$userID', '$skill')";


if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
    echo "<script>window.location.href = '{$menuProfileAddSkill}';</script>";
    exit;

}

$conn->close();

echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
exit;

?>