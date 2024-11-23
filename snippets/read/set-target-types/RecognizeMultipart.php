<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\RecognizeApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Requests\BarcodeRecognizeMultipartPostRequest;

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
    $recognizeApi = new RecognizeApi(makeConfiguration());

    $fileName = realpath(__DIR__ . '/testdata/Pdf417.png');
    $fileStream = fopen($fileName, 'rb');
    
    $request = new BarcodeRecognizeMultipartPostRequest(
        DecodeBarcodeType::Pdf417,
        $fileStream
    );

    $result = $recognizeApi->barcodeRecognizeMultipartPost($request);
    fclose($fileStream);

    echo sprintf(
        "File '%s' recognized, result: '%s'\n",
        $fileName,
        $result->getBarcodes()[0]->getBarcodeValue()
    );
}

main();