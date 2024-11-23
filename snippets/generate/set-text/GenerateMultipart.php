<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Requests\BarcodeGenerateMultipartPostRequest;
use Aspose\BarCode\Model\{EncodeBarcodeType, EncodeDataType};

function makeConfiguration(): Configuration
{
    $config = new Configuration();

    $envToken = getenv("TEST_CONFIGURATION_JWT_TOKEN");
    if (empty($envToken)) {
        $config->setClientId("Client Id from https://dashboard.aspose.cloud/applications");
        $config->setClientSecret("Client Secret from https://dashboard.aspose.cloud/applications");
    } else {
        $config->setAccessToken($envToken);
    }

    return $config;
}

function main(): void
{
    $fileName = realpath(dirname(__FILE__)) . '/Code128.png';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $formRequest = new BarcodeGenerateMultipartPostRequest(EncodeBarcodeType::Code128, "4173706F73652E426172436F64652E436C6F7564");
    $formRequest->setDataType(EncodeDataType::HexBytes);

    $generated = $generateApi->barcodeGenerateMultipartPost($formRequest);

    file_put_contents($fileName, stream_get_contents($generated));

    echo "File '{$fileName}' generated.\n";
}

main();