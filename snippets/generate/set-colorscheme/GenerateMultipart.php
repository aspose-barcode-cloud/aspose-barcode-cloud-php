<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\{BarcodeImageFormat};
use Aspose\BarCode\Requests\BarcodeGenerateMultipartPostRequest;

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
    $fileName = realpath(dirname(__FILE__)) . '/Code39.png';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $request = new BarcodeGenerateMultipartPostRequest(EncodeBarcodeType::Code39, "Aspose");
    $request->setForegroundColor("Green");
    $request->setBackgroundColor("Yellow");
    $request->setImageFormat(BarcodeImageFormat::Gif);

    $barcodeStream = $generateApi->barcodeGenerateMultipartPost($request);

    file_put_contents($fileName, stream_get_contents($barcodeStream));

    echo "File '{$fileName}' generated.\n";
}

main();