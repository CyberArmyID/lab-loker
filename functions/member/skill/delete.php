<?php
include "../../../init.php";
include "../getUser.php";

$id = $_GET['id'];

$sql = "DELETE FROM skills WHERE id = '$id'";

if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message_skill'] = "Error: " . $sql . "<br>" . $conn->error;


    header('Location: ' . $menuProfile.'/profile');
    exit();
}


header('Location: ' . $menuProfile.'/profile');
exit();
