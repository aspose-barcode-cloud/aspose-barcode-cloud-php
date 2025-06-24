<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\RecognizeApi;
use Aspose\BarCode\Model\{DecodeBarcodeType, RecognizeBase64Request, RecognitionMode};
use Aspose\BarCode\Requests\RecognizeBase64RequestWrapper;

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
    $recognizeApi = new RecognizeApi(null, makeConfiguration());

    $fileName = __DIR__ . '/../testdata/pdf417Sample.png';
    $imageBytes = file_get_contents($fileName);
    $imageBase64 = base64_encode($imageBytes);

    $base64Request = new RecognizeBase64Request([
        'barcode_types' => [DecodeBarcodeType::Pdf417],
        'file_base64' => $imageBase64
    ]);

    $request = new RecognizeBase64RequestWrapper($base64Request);

    $result = $recognizeApi->recognizeBase64($request);

    echo sprintf(
        "File '%s' recognized, result: '%s'\n",
        $fileName,
        $result->getBarcodes()[0]->getBarcodeValue()
    );
}

main();
