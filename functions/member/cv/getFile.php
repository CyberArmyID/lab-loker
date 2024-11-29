<?php
//http://localhost:8004/functions/member/cv/getFile.php?file=../../../../../../../usr/bin/passwd
$file = $_GET['file'];
$filePath = "../../../assets/file/{$file}";

// Memeriksa apakah file ada
if (file_exists($filePath) && is_file($filePath)) {
    // Mengirimkan header untuk menampilkan file PDF di browser
    header('Content-Type: application/pdf');
    header('Content-Length: ' . filesize($filePath));

    // Membaca dan mengirimkan file PDF ke browser
    readfile($filePath);
} else {
    echo "File tidak ditemukan atau tidak valid.";
}
?>


