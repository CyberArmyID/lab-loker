<?php

$getData = "SELECT users.fullname, jobs.name, jobs.company_name, user_jobs.status FROM user_jobs
            JOIN users ON user_jobs.user_id = users.id
            JOIN jobs ON user_jobs.job_id = jobs.id
            where user_jobs.id = ".$_GET['id']."";

$result = $conn->query($getData);
$data = $result->fetch_assoc();