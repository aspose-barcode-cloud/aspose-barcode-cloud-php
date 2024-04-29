<?php

declare(strict_types=1);

use Aspose\BarCode\BarcodeApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Model\PresetType;
use Aspose\BarCode\Requests\GetBarcodeGenerateRequest;
use Aspose\BarCode\Requests\PostBarcodeRecognizeFromUrlOrContentRequest;
use Aspose\BarCode\Requests\ScanBarcodeRequest;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


final class EndToEndTest extends TestCase
{
    public function testGenerateAndRecognize(): void
    {
        $config = TestConfiguration::fromFileOrEnv();
        $api = new BarcodeApi(null, $config);

        // Generate

        $genRequest = new GetBarCodeGenerateRequest('QR', 'PHP SDK Test');
        $genRequest->format = 'png';

        $genResponse = $api->GetBarCodeGenerate($genRequest);

        $imageSize = $genResponse->getSize();
        $this->assertGreaterThan(0, $imageSize);

        // Scan

        $scanRequest = new ScanBarcodeRequest($genResponse);
        $scanRequest->decode_types = [DecodeBarcodeType::QR, DecodeBarcodeType::DataMatrix];

        $scanResponse = $api->ScanBarcode($scanRequest);
        $this->assertNotEmpty($scanResponse);

        $this->assertEquals('QR', $scanResponse->getBarcodes()[0]->getType());
        $this->assertEquals('PHP SDK Test', $scanResponse->getBarcodes()[0]->getBarcodeValue());
    }
}
