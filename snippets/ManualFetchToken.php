<?php

$clientId = '<Your-Client-Id>';
$clientSecret = '<Your-Client-Secret>';

$url = 'https://id.aspose.cloud/connect/token';

// Prepare the POST fields
$data = [
    'grant_type' => 'client_credentials',
    'client_id' => $clientId,
    'client_secret' => $clientSecret
];

// Initialize cURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set headers (optional, if the API requires it)
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded'
]);

// Execute the request
$response = curl_exec($ch);
$error = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

// Handle the response
if ($response === false) {
    echo "Request error: $error\n";
} elseif ($httpCode >= 200 && $httpCode < 300) {
    echo "Response: $response\n";
} else {
    echo "Unexpected HTTP code: $httpCode\nResponse: $response\n";
}

?>
