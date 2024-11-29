<?php
$id = $_GET['id'];

$getData = "SELECT * FROM skills 
            WHERE id = $id";

$resultSkill = $conn->query($getData);
$data = $resultSkill->fetch_assoc();

?>