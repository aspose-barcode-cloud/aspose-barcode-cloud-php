<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\ScanApi;
use Aspose\BarCode\Model\ScanBase64Request;
use Aspose\BarCode\Requests\ScanBase64RequestWrapper;

require_once 'vendor/autoload.php';

function makeConfiguration()
{
    $config = new Configuration();

    $envToken = getenv('TEST_CONFIGURATION_ACCESS_TOKEN');
    if (empty($envToken)) {
        $config->setClientId("Client Id from https://dashboard.aspose.cloud/applications");
        $config->setClientSecret("Client Secret from https://dashboard.aspose.cloud/applications");
    } else {
        $config->setAccessToken($envToken);
    }

    return $config;
}

function main()
{
    $scanApi = new ScanApi(null, makeConfiguration());

    $fileName = __DIR__ . '/../testdata/Qr.png';
    $imageBytes = file_get_contents($fileName);
    $imageBase64 = base64_encode($imageBytes);

    $base64Request = new ScanBase64Request([
        'file_base64' => $imageBase64
    ]);

    $request = new ScanBase64RequestWrapper($base64Request);

    $result = $scanApi->scanBase64($request);

    echo sprintf(
        "File '%s' recognized, result: '%s'\n",
        $fileName,
        $result->getBarcodes()[0]->getBarcodeValue()
    );
}

main();