<?php

declare(strict_types=1);

use Aspose\BarCode\ApiException;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Configuration;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Model\EncodeDataType;
use Aspose\BarCode\Model\EncodeData;
use Aspose\BarCode\Model\BarcodeImageParams;
use Aspose\BarCode\Model\AvailableBarCodeImageFormat;
use Aspose\BarCode\Model\GenerateParams;
use Aspose\BarCode\Requests\BarcodeGenerateBarcodeTypeGetRequest;
use Aspose\BarCode\Requests\BarcodeGenerateBodyPostRequest;
use Aspose\BarCode\Requests\BarcodeGenerateFormPostRequest;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


/**
 * GenerateApiTest Class Doc Comment
 */
class GenerateApiTest extends TestCase
{
    /**
     * @var ?GenerateApi
     */
    private static ?GenerateApi $api = null;
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
        self::$api = new GenerateApi(null, self::$config);
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
     * Test case for barcodeGenerateBarcodeTypeGet
     *
     * Generate barcode.
     */
    public function testBarcodeGenerateBarcodeTypeGet()
    {
        $request = new BarcodeGenerateBarcodeTypeGetRequest(EncodeBarcodeType::QR, EncodeDataType::StringData, 'PHP SDK Test');
        $request->image_format = AvailableBarCodeImageFormat::Png;

        $response = self::$api->barcodeGenerateBarcodeTypeGet($request);

        $imageSize = $response->getSize();
        $this->assertGreaterThan(0, $imageSize);
    }


    /**
     * Test case for barcodeGenerateBodyPost
     *
     */
    public function testbarcodeGenerateBodyPost()
    {
        $params = new GenerateParams();
        $params->setBarcodeType(EncodeBarcodeType::QR);
        $params->setEncodeData(new EncodeData(["data_type" => EncodeDataType::StringData, "data" => "PHP Test"]));
        $params->setBarcodeImageParams(new BarcodeImageParams(["image_format" => AvailableBarCodeImageFormat::Jpeg]));
        $request = new BarcodeGenerateBodyPostRequest($params);

        $response = self::$api->barcodeGenerateBodyPost($request);

        $this->assertGreaterThan(0, $response->getSize());
    }


    /**
     * Test case for barcodeGenerateFormPost
     *
     */
    public function testbarcodeGenerateFormPost()
    {
        $request = new BarcodeGenerateFormPostRequest(
            EncodeBarcodeType::Code128,
            EncodeDataType::StringData,
            'PHP SDK Test'
        );


        $response = self::$api->barcodeGenerateFormPost($request);


        $this->assertGreaterThan(0, $response->getSize());
    }
}