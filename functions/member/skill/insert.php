<?php
include "../../../init.php";
include "../getUser.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: '.$menuProfile.'/profile');
    exit;
}

$skill = $_POST["skill"];

$sql = "INSERT INTO skills (user_id, skill) VALUES ('$userID', '$skill')";


if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;

    header('Location: '.$menuProfileAddSkill);
    exit();
}

$conn->close();
header('Location: '.$menuProfile.'/profile');
exit();

?>