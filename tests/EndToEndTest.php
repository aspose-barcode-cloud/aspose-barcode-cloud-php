<?php

declare(strict_types=1);

use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\ScanApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Model\EncodeDataType;
use Aspose\BarCode\Model\BarcodeImageFormat;
use Aspose\BarCode\Requests\BarcodeGenerateBarcodeTypeGetRequest;
use Aspose\BarCode\Requests\BarcodeScanMultipartPostRequest;
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
        $genRequest = new BarcodeGenerateBarcodeTypeGetRequest(EncodeBarcodeType::QR, 'PHP SDK Test');
        $genRequest->image_format = BarcodeImageFormat::Png;

        $genResponse = $genApi->barcodeGenerateBarcodeTypeGet($genRequest);

        // Scan

        $scanRequest = new BarcodeScanMultipartPostRequest($genResponse);

        $scanResponse = $scanApi->barcodeScanMultipartPost($scanRequest);
        $this->assertNotEmpty($scanResponse);

        $this->assertEquals('QR', $scanResponse->getBarcodes()[0]->getType());
        $this->assertEquals('PHP SDK Test', $scanResponse->getBarcodes()[0]->getBarcodeValue());
    }
}
