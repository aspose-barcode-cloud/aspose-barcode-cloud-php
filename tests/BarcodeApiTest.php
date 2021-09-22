<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

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
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


/**
 * BarcodeApiTest Class Doc Comment
 *
 * @category Class
 * @package  Aspose\BarCode
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BarcodeApiTest extends TestCase
{
    /**
     * @var BarcodeApi
     */
    private static $api = null;
    /**
     * @var Configuration
     */
    private static $config = null;

    /**
     * @var string
     */
    private static $tempFolderPath = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        self::$config = TestConfiguration::fromFileOrEnv();
        self::$api = new BarcodeApi(null, self::$config);
        self::$tempFolderPath = 'BarcodeTests/' . uniqid();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Test case for getBarcodeGenerate
     *
     * Generate barcode.
     *
     */
    public function testGetBarcodeGenerate()
    {
        $request = new GetBarCodeGenerateRequest(EncodeBarcodeType::QR, 'PHP SDK Test');
        $request->format = 'png';

        $response = self::$api->GetBarCodeGenerate($request);

        $imageSize = $response->getSize();
        $this->assertGreaterThan(0, $imageSize);
    }

    /**
     * Test case for getBarcodeRecognize
     *
     * Recognize barcode from a file on server.
     *
     */
    public function testGetBarcodeRecognize()
    {
        $fileApi = new FileApi(null, self::$config);
        $path = self::$tempFolderPath . '/' . 'testGetBarcodeRecognize.png';
        $uploaded = $fileApi->uploadFile(
            new UploadFileRequest(
                $path,
                new SplFileObject('./testdata/pdf417Sample.png')
            )
        );
        $this->assertEmpty($uploaded->getErrors(), strval($uploaded));

        $request = new GetBarcodeRecognizeRequest($uploaded->getUploaded()[0]);
        $request->folder = self::$tempFolderPath;

        $response = self::$api->GetBarcoderecognize($request);

        $barcodes = $response->getBarcodes();
        $this->assertCount(1, $barcodes);
        $this->assertEquals(DecodeBarcodeType::Pdf417, $barcodes[0]->getType());
        $this->assertEquals('Aspose.BarCode for Cloud Sample', $barcodes[0]->getBarcodeValue());
    }

    /**
     * Test case for postBarcodeRecognizeFromUrlOrContent
     *
     * Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image or encoded with base64.
     *
     */
    public function testPostBarcodeRecognizeFromUrlOrContent()
    {
        $request = new PostBarCodeRecognizeFromUrlorContentRequest();
        $request->image = new SplFileObject('./testdata/pdf417Sample.png');
        $request->preset = PresetType::HighPerformance;

        $response = self::$api->PostBarCodeRecognizeFromUrlorContent($request);

        $barcodes = $response->getBarcodes();
        $this->assertCount(1, $barcodes);
        $this->assertEquals(DecodeBarcodeType::Pdf417, $barcodes[0]->getType());
        $this->assertEquals('Aspose.BarCode for Cloud Sample', $barcodes[0]->getBarcodeValue());
    }

    /**
     * Test case for postGenerateMultiple
     *
     * Generate multiple barcodes and return in response stream.
     *
     */
    public function testPostGenerateMultiple()
    {
        $request = new PostGenerateMultipleRequest(
            new GeneratorParamsList([
                'barcode_builders' => [
                    new GeneratorParams([
                        'type_of_barcode' => EncodeBarcodeType::QR,
                        'text' => 'Hello QR!',
                    ]),
                    new GeneratorParams([
                        'type_of_barcode' => EncodeBarcodeType::Code128,
                        'text' => 'Hello Code128!',
                    ]),
                ],
                'x_step' => 0,
                'y_step' => 0,
            ])
        );

        $response = self::$api->postGenerateMultiple($request);

        $this->assertGreaterThan(0, $response->getSize());
    }

    /**
     * Test case for putBarcodeGenerateFile
     *
     * Generate barcode and save on server (from query params or from file with json or xml content).
     *
     */
    public function testPutBarcodeGenerateFile()
    {
        $request = new PutBarcodeGenerateFileRequest(
            'testPutBarcodeGenerateFile.png',
            EncodeBarcodeType::Code128,
            'Hello!'
        );
        $request->folder = self::$tempFolderPath;

        $response = self::$api->putBarcodeGenerateFile($request);

        $this->assertGreaterThan(0, $response->getFileSize());
        $this->assertGreaterThan(0, $response->getImageWidth());
        $this->assertGreaterThan(0, $response->getImageHeight());
    }

    /**
     * Test case for putBarcodeRecognizeFromBody
     *
     * Recognition of a barcode from file on server with parameters in body.
     *
     */
    public function testPutBarcodeRecognizeFromBody()
    {
        // Upload test file
        $fileApi = new FileApi(null, self::$config);
        $path = self::$tempFolderPath . '/' . 'testGetBarcodeRecognize.png';
        $uploaded = $fileApi->uploadFile(
            new UploadFileRequest(
                $path,
                new SplFileObject('./testdata/pdf417Sample.png')
            )
        );
        $this->assertEmpty($uploaded->getErrors(), strval($uploaded));

        // Arrange
        $request = new PutBarcodeRecognizeFromBodyRequest(
            $uploaded->getUploaded()[0],
            new ReaderParams([
                'type' => DecodeBarcodeType::Pdf417,
                'preset' => PresetType::HighPerformance,
            ])
        );
        $request->folder = self::$tempFolderPath;

        // Act
        $response = self::$api->putBarcodeRecognizeFromBody($request);

        // Assert
        $barcodes = $response->getBarcodes();
        $this->assertCount(1, $barcodes);
        $this->assertEquals(DecodeBarcodeType::Pdf417, $barcodes[0]->getType());
        $this->assertEquals('Aspose.BarCode for Cloud Sample', $barcodes[0]->getBarcodeValue());
    }

    /**
     * Test case for putGenerateMultiple
     *
     * Generate image with multiple barcodes and put new file on server.
     *
     */
    public function testPutGenerateMultiple()
    {
        $request = new PutGenerateMultipleRequest(
            'testPutGenerateMultiple.png',
            new GeneratorParamsList([
                'barcode_builders' => [
                    new GeneratorParams([
                        'type_of_barcode' => EncodeBarcodeType::QR,
                        'text' => 'Hello QR!',
                    ]),
                    new GeneratorParams([
                        'type_of_barcode' => EncodeBarcodeType::Code128,
                        'text' => 'Hello Code128!',
                    ]),
                ],
                'x_step' => 0,
                'y_step' => 0,
            ])
        );
        $request->folder = self::$tempFolderPath;

        $response = self::$api->putGenerateMultiple($request);

        $this->assertGreaterThan(0, $response->getFileSize());
        $this->assertGreaterThan(0, $response->getImageWidth());
        $this->assertGreaterThan(0, $response->getImageHeight());
    }
}
