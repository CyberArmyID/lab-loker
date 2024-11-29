<?php
//payload http://localhost:8004/functions/member/profile/avatar.php?file=../../../../../../../usr/bin/passwd
$file = $_GET['file'];
$filePath = "../../../assets/gallery/{$file}";
include($filePath);
?>


