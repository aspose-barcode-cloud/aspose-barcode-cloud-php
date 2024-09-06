<?php

declare(strict_types=1);

use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\ScanApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Model\EncodeDataType;
use Aspose\BarCode\Model\AvailableBarCodeImageFormat;
use Aspose\BarCode\Requests\BarcodeGenerateBarcodeTypeGetRequest;
use Aspose\BarCode\Requests\BarcodeScanFormPostRequest;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


final class EndToEndTest extends TestCase
{
    public function testGenerateAndRecognize(): void
    {
        $config = TestConfiguration::fromFileOrEnv();
        $genApi = new GenerateApi(null, $config);
        $scanApi = new ScanApi(null, $config);

        // Generate
        $genRequest = new BarcodeGenerateBarcodeTypeGetRequest(EncodeBarcodeType::QR, EncodeDataType::StringData, 'PHP SDK Test');
        $genRequest->image_format = AvailableBarCodeImageFormat::Png;

        $genResponse = $genApi->barcodeGenerateBarcodeTypeGet($genRequest);

        // Scan

        $scanRequest = new BarcodeScanFormPostRequest($genResponse);

        $scanResponse = $scanApi->barcodeScanFormPost($scanRequest);
        $this->assertNotEmpty($scanResponse);

        $this->assertEquals('QR', $scanResponse->getBarcodes()[0]->getType());
        $this->assertEquals('PHP SDK Test', $scanResponse->getBarcodes()[0]->getBarcodeValue());
    }
}
