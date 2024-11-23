<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Aspose\BarCode\Configuration;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\{GenerateParams, EncodeBarcodeType, EncodeData, EncodeDataType, BarcodeImageParams, BarcodeImageFormat};
use Aspose\BarCode\Requests\BarcodeGenerateBodyPostRequest;

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
    $fileName = realpath(dirname(__FILE__)) . '/Code39.jpeg';

    $generateApi = new GenerateApi(null, makeConfiguration());

    $generateParams = new GenerateParams([
        'barcode_type' => EncodeBarcodeType::Code39,
        'encode_data' => new EncodeData([
            'data' => 'Aspose',
            'data_type' => EncodeDataType::StringData
        ]),
        'barcode_image_params' => new BarcodeImageParams([
            'foreground_color' => '#FF0000',
            'background_color' => '#FFFF00',
            'image_format' => BarcodeImageFormat::Jpeg,
            'rotation_angle' => 90
        ])
    ]);

    $request = new BarcodeGenerateBodyPostRequest($generateParams);
    $generated = $generateApi->barcodeGenerateBodyPost($request);

    file_put_contents($fileName, $generated->fread($generated->getSize()));

    echo "File '{$fileName}' generated.\n";
}

main();
