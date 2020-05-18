<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Aspose\BarCode\BarCodeApi;
use Aspose\BarCode\Configuration;
use Aspose\BarCode\Model\DecodeBarcodeType;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Model\GeneratorParams;
use Aspose\BarCode\Model\GeneratorParamsList;
use Aspose\BarCode\Model\PresetType;
use Aspose\BarCode\Requests\GetBarcodeGenerateRequest;
use Aspose\BarCode\Requests\PostBarcodeRecognizeFromUrlOrContentRequest;
use Aspose\BarCode\Requests\PostGenerateMultipleRequest;
use PHPUnit\Framework\TestCase;


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
     * @var BarCodeApi
     */
    private static $api = null;
    /**
     * @var Configuration
     */
    private static $config = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
        self::$config = Configuration::fromJson(file_get_contents('Configuration.json', true));
        self::$api = new BarCodeApi(null, self::$config);
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
     * Generate barcode..
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
     * Recognize barcode from a file on server..
     *
     */
    public function testGetBarcodeRecognize()
    {
    }

    /**
     * Test case for postBarcodeRecognizeFromUrlOrContent
     *
     * Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image or encoded with base64..
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
        $firstBarcode = new GeneratorParams([
            'type_of_barcode' => EncodeBarcodeType::QR,
            'text' => 'Hello QR!'
        ]);
        $secondBarcode = new GeneratorParams([
            'type_of_barcode' => EncodeBarcodeType::Code128,
            'text' => 'Hello Code128!'
        ]);
        $firstBarcode->setTypeOfBarcode([$firstBarcode, $secondBarcode]);
        $list = new GeneratorParamsList([$firstBarcode]);
        $request = new PostGenerateMultipleRequest($list);

        $response = self::$api->postGenerateMultiple($request);

        $this->assertGreaterThan(0, $response->getSize);
    }

    /**
     * Test case for putBarcodeGenerateFile
     *
     * Generate barcode and save on server (from query params or from file with json or xml content).
     *
     */
    public function testPutBarcodeGenerateFile()
    {
    }

    /**
     * Test case for putBarcodeRecognizeFromBody
     *
     * Recognition of a barcode from file on server with parameters in body..
     *
     */
    public function testPutBarcodeRecognizeFromBody()
    {
    }

    /**
     * Test case for putGenerateMultiple
     *
     * Generate image with multiple barcodes and put new file on server.
     *
     */
    public function testPutGenerateMultiple()
    {
    }
}
