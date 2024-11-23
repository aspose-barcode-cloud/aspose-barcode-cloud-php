<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\{BarcodeImageFormat};
use Aspose\BarCode\Requests\BarcodeGenerateMultipartPostRequest;
use Aspose\BarCode\Model\EncodeBarcodeType;

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
    $fileName = realpath(dirname(__FILE__)) . '/Pdf417.svg';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $request = new BarcodeGenerateMultipartPostRequest(
        EncodeBarcodeType::Pdf417,
        "Aspose.BarCode.Cloud"
    );
    $request->setTextLocation("Above");
    $request->setImageFormat(BarcodeImageFormat::Svg);

    $barcodeStream = $generateApi->barcodeGenerateMultipartPost($request);

    file_put_contents($fileName, stream_get_contents($barcodeStream->fread($barcodeStream->getSize())));

    echo "File '{$fileName}' generated.\n";
}

main();