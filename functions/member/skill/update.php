<?php
include "../../../init.php";
include "../getUser.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
    exit;

}

$id = $_GET['id'];
$skill = $_POST['skill'];


$skill = $conn->real_escape_string($skill);

$sql = "UPDATE skills set skill = '$skill' WHERE id = '$id'";

if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message_skill'] = "Error: " . $sql . "<br>" . $conn->error;

    echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
    exit;

}


echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
exit;
?>