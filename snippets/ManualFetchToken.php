<?php

    require 'vendor/autoload.php';

    use GuzzleHttp\Client;

    $clientId = 'Client Id from https://dashboard.aspose.cloud/applications';
    $clientSecret = 'Client Secret from https://dashboard.aspose.cloud/applications';

    // Check the client_id is changed to not break GitHub CI pipeline
    if (str_starts_with($clientId, "Client Id")) {
        echo "clientId not configured. Skip this snippet test";
        return;
    }

    $url = 'https://id.aspose.cloud/connect/token';

    $data = [
        'grant_type' => 'client_credentials',
        'client_id' => $clientId,
        'client_secret' => $clientSecret
    ];

    $client = new Client();

    $response = $client->post($url, [
        'form_params' => $data,
        'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ]
    ]);

    $body = $response->getBody()->getContents();
    $statusCode = $response->getStatusCode();

    if ($statusCode >= 200 && $statusCode < 300) {
        $bodyArray=json_decode($body, true);
        $token=$bodyArray["access_token"];
        echo "Token recieved successfully\n";
        // To veiw token uncomment next line
        // echo "$token";

    } else {
        throw new Exception("Unexpected HTTP code: $statusCode\nResponse: $body\n");
    }
