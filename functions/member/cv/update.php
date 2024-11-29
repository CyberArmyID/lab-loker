<?php
include "../../../init.php";
include "../getUser.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: '.$menuProfile.'/profile');
    exit;
}


//if update file cv
$fileName = $_FILES['filecv']['name'] ?? "";


if ($fileName) {
//    validate type ext file
    // Ambil informasi file yang diunggah
    $fileName = $_FILES["filecv"]["name"];
    $fileTmpName = $_FILES["filecv"]["tmp_name"];
    $fileSize = $_FILES["filecv"]["size"];
    $fileError = $_FILES["filecv"]["error"];
    $fileType = $_FILES["filecv"]["type"];

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
    $directory = "../../../assets/file/";

    $newFileName = md5($userID).'.'.$fileExt;

    // Membuat path file baru dengan nama '1' dan ekstensi file yang sesuai
    $newFilePath = $directory . $newFileName;
    if (move_uploaded_file($_FILES['filecv']['tmp_name'], $newFilePath)) {

    } else {
        $_SESSION['error_message'] .= "File gagal diupload.";
    }

    // Mengecek apakah data dengan ID yang sama sudah ada di database
    $query = "SELECT * FROM curriculum_vitaes WHERE user_id = $userID";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Data ditemukan, lakukan update
        $update_query = "UPDATE curriculum_vitaes SET filename = '$newFileName' WHERE user_id = $userID";
        if ($conn->query($update_query) === TRUE) {
            echo "Data CV berhasil diperbarui.";
        } else {
            $_SESSION['error_message'] .= "Error updating record: " . $conn->error;
        }
    } else {
        // Data tidak ditemukan, lakukan insert
        $insert_query = "INSERT INTO curriculum_vitaes (user_id, filename) VALUES ($userID, '$newFileName')";
        if ($conn->query($insert_query) === TRUE) {
            echo "Data CV berhasil ditambahkan.";
        } else {
            $_SESSION['error_message'] .= "Error inserting record: " . $conn->error;
        }
    }

}


header('Location: '.$menuProfile.'/profile/index.php');
exit();

?>