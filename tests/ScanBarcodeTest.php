<?php

declare(strict_types=1);

use Aspose\BarCode\ApiException;
use Aspose\BarCode\BarcodeApi;
use Aspose\BarCode\Configuration;
use Aspose\BarCode\FileApi;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Model\GeneratorParams;
use Aspose\BarCode\Model\GeneratorParamsList;
use Aspose\BarCode\Model\PresetType;
use Aspose\BarCode\Model\ReaderParams;
use Aspose\BarCode\Requests\GetBarcodeGenerateRequest;
use Aspose\BarCode\Requests\GetBarcodeRecognizeRequest;
use Aspose\BarCode\Requests\PostBarcodeRecognizeFromUrlOrContentRequest;
use Aspose\BarCode\Requests\PostGenerateMultipleRequest;
use Aspose\BarCode\Requests\PutBarcodeGenerateFileRequest;
use Aspose\BarCode\Requests\PutBarcodeRecognizeFromBodyRequest;
use Aspose\BarCode\Requests\PutGenerateMultipleRequest;
use Aspose\BarCode\Requests\UploadFileRequest;
use Aspose\BarCode\Requests\ScanBarcodeRequest;
use Aspose\BarCode\Model\ChecksumValidation;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


/**
 * Tests for scanBarcode endpoint
 */
class ScanBarcodeTest extends TestCase
{
    /**
     * @var ?BarcodeApi
     */
    private static ?BarcodeApi $api = null;
    /**
     * @var ?Configuration
     */
    private static ?Configuration $config = null;

    /**
     * @var ?string
     */
    private static ?string $tempFolderPath = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        self::$config = TestConfiguration::fromFileOrEnv();
        self::$api = new BarcodeApi(null, self::$config);
    }

    /**
     * Scan should recognize Code39 without checksum
     */
    public function testScanCode39()
    {
        $image_file = new SplFileObject('./testdata/Code39.jpg');
        $request = new ScanBarcodeRequest($image_file);
        $request->decode_types = [DecodeBarcodeType::Code39Extended];
        $request->checksum_validation = ChecksumValidation::Off;

        $response = self::$api->scanBarcode($request);

        $barcodes = $response->getBarcodes();
        $this->assertCount(1, $barcodes);

        $this->assertEquals(DecodeBarcodeType::Code39Extended, $barcodes[0]->getType());
        $this->assertEquals('8M93', $barcodes[0]->getBarcodeValue());
    }
}
