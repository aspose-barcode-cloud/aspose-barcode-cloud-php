<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\ScanApi;
use Aspose\BarCode\Requests\BarcodeScanMultipartPostRequest;

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
    $scanApi = new ScanApi(null, makeConfiguration());

    $fileName = realpath(__DIR__ . '/../../../testdata/qr.png');
    $fileStream = fopen($fileName, 'r');
    $request = new BarcodeScanMultipartPostRequest($fileStream);
    
    $result = $scanApi->barcodeScanMultipartPost($request);
    fclose($fileStream);

    echo sprintf("File '%s' recognized, result: '%s'\n", $fileName, $result->getBarcodes()[0]->getBarcodeValue());
}

main();