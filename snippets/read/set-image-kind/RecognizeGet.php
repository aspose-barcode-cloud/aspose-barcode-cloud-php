<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\RecognizeApi;
use Aspose\BarCode\Model\{DecodeBarcodeType, RecognitionImageKind};
use Aspose\BarCode\Requests\BarcodeRecognizeGetRequest;

require_once __DIR__ . '/vendor/autoload.php';

function makeConfiguration()
{
    $config = new Configuration();

    $envToken = getenv('TEST_CONFIGURATION_JWT_TOKEN');
    if (empty($envToken)) {
        $config->setClientId("Client Id from https://dashboard.aspose.cloud/applications");
        $config->setClientSecret("Client Secret from https://dashboard.aspose.cloud/applications");
    } else {
        $config->setJwtToken($envToken);
    }

    return $config;
}

function main()
{
    $recognizeApi = new RecognizeApi(null, makeConfiguration());
    
    $request = new BarcodeRecognizeGetRequest(DecodeBarcodeType::QR, "https://products.aspose.app/barcode/scan/img/how-to/scan/step2.png");
    $request->setImageKind(RecognitionImageKind::Photo);

    $result = $recognizeApi->barcodeRecognizeGet($request);

    echo sprintf("File '%s' recognized, result: '%s'\n", "https://products.aspose.app/barcode/scan/img/how-to/scan/step2.png", $result->getBarcodes()[0]->getBarcodeValue());
}

main();