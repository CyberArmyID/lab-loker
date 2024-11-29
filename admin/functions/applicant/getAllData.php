<?php

$getData = "SELECT users.fullname, jobs.name, jobs.company_name, user_jobs.status, user_jobs.id FROM user_jobs
            JOIN users ON user_jobs.user_id = users.id
            JOIN jobs ON user_jobs.job_id = jobs.id
            order by user_jobs.created_at DESC";

$result = $conn->query($getData);
