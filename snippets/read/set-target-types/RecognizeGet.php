<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\RecognizeApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Requests\RecognizeRequestWrapper;

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
    
    $request = new RecognizeRequestWrapper(
        DecodeBarcodeType::MostCommonlyUsed, 
        "https://products.aspose.app/barcode/scan/img/how-to/scan/step2.png"
    );
    
    $result = $recognizeApi->recognize($request);

    echo sprintf(
        "File recognized, result: '%s'\n",
        $result->getBarcodes()[0]->getBarcodeValue()
    );
}

main();