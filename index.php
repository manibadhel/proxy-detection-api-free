<?php

// Code by www.maninder.net

$ip = $_SERVER['REMOTE_ADDR'];
$api_url = "https://api.maninder.net/lookup/?ip=" . urlencode($ip);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo "Error fetching API data: " . curl_error($ch);
    curl_close($ch);
    exit;
}
curl_close($ch);

$data = json_decode($response, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding API response.";
    exit;
}

if (isset($data['proxy']) && $data['proxy'] === 'true') {
    echo "<p style='color:red'>Warning: This is a Proxied Connection</p>";
} else {
    echo "<p style='color:green'>Not a proxy</p>";
}
?>
