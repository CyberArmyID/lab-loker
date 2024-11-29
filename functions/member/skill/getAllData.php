<?php

$getData = "SELECT * FROM skills 
            WHERE user_id = $userID";

$resultSkill = $conn->query($getData);

?>