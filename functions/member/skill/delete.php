<?php
include "../../../init.php";
include "../getUser.php";

$id = $_GET['id'];

$sql = "DELETE FROM skills WHERE id = '$id'";

if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message_skill'] = "Error: " . $sql . "<br>" . $conn->error;

    echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
    exit;

}

echo "<script>window.location.href = '{$menuProfile}/profile';</script>";
exit;
