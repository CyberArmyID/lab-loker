<?php
include "../../../init.php";
include "../getUser.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: '.$menuProfile.'/profile');
    exit;
}

$fullname = $_POST["fullname"];
$title = $_POST["title"];

$fullname = $conn->real_escape_string($fullname);
$title = $conn->real_escape_string($title);

//if update avatar
$fileName = $_FILES['avatar']['name'] ?? "";
$directory = "../../../assets/gallery/";

if ($fileName) {
//    validate type ext file
    // Ambil informasi file yang diunggah
    $fileName = $_FILES["avatar"]["name"];
    $fileTmpName = $_FILES["avatar"]["tmp_name"];
    $fileSize = $_FILES["avatar"]["size"];
    $fileError = $_FILES["avatar"]["error"];
    $fileType = $_FILES["avatar"]["type"];

    // Ambil ekstensi file
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Daftar ekstensi file yang tidak diizinkan
    $disallowedExts = ['php', 'zip'];

    // Periksa jika file memiliki ekstensi yang dilarang
    if (in_array($fileExt, $disallowedExts)) {
        $_SESSION['error_message'] = "File dengan ekstensi .$fileExt tidak diizinkan untuk di-upload.";
    }

    // Periksa jika ada error dalam pengunggahan file
    if ($fileError !== UPLOAD_ERR_OK) {
        $_SESSION['error_message'] .= "Terjadi kesalahan saat meng-upload file.";

    }

    $newFileName = $directory . $fileName;

    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $newFileName)) {

    } else {
        $_SESSION['error_message'] .= "File gagal diupload.";
    }

}

if($fileName){
    $avatar = $fileName;
}

$sql = "UPDATE users 
        set fullname = '$fullname', avatar = '$avatar', title= '$title' 
        WHERE id = '$userID'";


if ($conn->query($sql) === FALSE) {
    $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
}


header('Location: '.$menuProfile.'/profile/index.php');
exit();

?>