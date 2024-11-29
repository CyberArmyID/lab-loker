<?php
include "../../../init.php";
include "../getUser.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: '.$menuProfile.'/profile');
    exit;
}
$about = $_POST["about"];
$userID = $user['id'];
$about = $conn->real_escape_string($about);

$sql = "UPDATE users set about = '$about' WHERE id = $userID";


if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;

    header('Location: '.$menuProfileEditBio);
    exit();
}

header('Location: '.$menuProfile.'/profile');
exit();

?>