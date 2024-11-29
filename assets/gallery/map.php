<?php
// API Key Google Maps
//$apiKey = "ARINCAQQa";
$apiKey = "AIzaSyB9kxzzWetHKjjO32dKE2Atn4IkwuRu7pg";
// Alamat yang ingin dicari
$alamat = "Jakarta, Indonesia";

// Encode alamat untuk URL
$alamat = urlencode($alamat);

// URL untuk permintaan ke Geocoding API
$url = "https://maps.googleapis.com/maps/api/geocode/json?address={$alamat}&key={$apiKey}";

// Menggunakan file_get_contents untuk mengambil data dari API
$response = file_get_contents($url);

// Jika ingin menggunakan cURL untuk request yang lebih fleksibel, gunakan kode berikut:
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $response = curl_exec($ch);
// curl_close($ch);

// Mengonversi JSON response menjadi array PHP
$data = json_decode($response, true);

// Mengecek apakah ada hasil
if ($data['status'] == 'OK') {
    // Mendapatkan latitude dan longitude dari hasil
    $latitude = $data['results'][0]['geometry']['location']['lat'];
    $longitude = $data['results'][0]['geometry']['location']['lng'];
    echo "Latitude: $latitude, Longitude: $longitude";
} else {
    echo "Alamat tidak ditemukan atau terjadi kesalahan.";
}
?>

