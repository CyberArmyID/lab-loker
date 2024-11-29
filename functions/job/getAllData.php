<?php

$today = date("Y-m-d");

$getData = "SELECT * FROM jobs 
            WHERE date >= '$today'";

$resultJob = $conn->query($getData);

?>

