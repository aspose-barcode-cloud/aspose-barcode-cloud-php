<?php

declare(strict_types=1);

use Aspose\BarCode\Configuration;
use Aspose\BarCode\ScanApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Requests\BarcodeScanGetRequest;
use Aspose\BarCode\Requests\BarcodeScanFormPostRequest;
use Aspose\BarCode\Requests\BarcodeScanBodyPostRequest;
use Aspose\BarCode\Model\ScanBase64Request;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


final class ScanApiTest extends TestCase
{
    /**
    * @var ?ScanApi
    */
    private static ?ScanApi $api = null;
    /**
     * @var ?Configuration
     */
    private static ?Configuration $config = null;

    /**
     * @var ?string
     */
    private static ?string $testDataFolderPath = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        self::$config = TestConfiguration::fromFileOrEnv();
        self::$api = new ScanApi(null, self::$config);
        self::$testDataFolderPath = './testdata/';
    }


    public function testBarcodeScanFormPost(): void
    {
        $file = new SplFileObject(self::$testDataFolderPath . 'pdf417Sample.png');
        $scanRequest = new BarcodeScanFormPostRequest($file);

        $scanResponse = self::$api->barcodeScanFormPost($scanRequest);
        $this->assertNotEmpty($scanResponse);

        $this->assertEquals(DecodeBarcodeType::Pdf417, $scanResponse->getBarcodes()[0]->getType());
        $this->assertEquals('Aspose.BarCode for Cloud Sample', $scanResponse->getBarcodes()[0]->getBarcodeValue());
    }

    public function testBarcodeScanBodyPost(): void
    {
        $file = new SplFileObject(self::$testDataFolderPath . 'QR_and_Code128.png');
        $scanBase64request = new ScanBase64Request(["file_base64" => base64_encode($file->fread($file->getSize()))]);
        $scanRequest = new BarcodeScanBodyPostRequest($scanBase64request);

        $scanResponse = self::$api->barcodeScanBodyPost($scanRequest);
        $this->assertNotEmpty($scanResponse);

        $this->assertCount(2, $scanResponse->getBarcodes());
        $this->assertEquals(DecodeBarcodeType::QR, $scanResponse->getBarcodes()[0]->getType());
        $this->assertEquals('Hello world!', $scanResponse->getBarcodes()[0]->getBarcodeValue());

        $this->assertEquals(DecodeBarcodeType::Code128, $scanResponse->getBarcodes()[1]->getType());
        $this->assertEquals('Hello world!', $scanResponse->getBarcodes()[1]->getBarcodeValue());
    }

    public function testBarcodeScanGet()
    {

        $response = self::$api->barcodeScanGet(new BarcodeScanGetRequest("https://products.aspose.app/barcode/scan/img/how-to/scan/step2.png"));

        $this->assertCount(1, $response->getBarcodes());

        $this->assertEquals(DecodeBarcodeType::QR, $response->getBarcodes()[0]->getType());
        $this->assertEquals("http://en.m.wikipedia.org", $response->getBarcodes()[0]->getBarcodeValue());
    }
}