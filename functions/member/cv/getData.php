<?php


$getData = "SELECT * FROM curriculum_vitaes 
            WHERE user_id = $userID";

$result = $conn->query($getData);
$dataCV = $result->fetch_assoc();


