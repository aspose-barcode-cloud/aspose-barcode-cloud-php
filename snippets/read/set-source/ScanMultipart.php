<?php

use Aspose\BarCode\Configuration;
use Aspose\BarCode\ScanApi;
use Aspose\BarCode\Requests\ScanMultipartRequestWrapper;

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
    $file = new SplFileObject($fileName, 'rb');
    $request = new ScanMultipartRequestWrapper($file);
    
    $result = $scanApi->scanMultipart($request);
    $file = null;

    echo sprintf("File '%s' recognized, result: '%s'\n", $fileName, $result->getBarcodes()[0]->getBarcodeValue());
}

main();