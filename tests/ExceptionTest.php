<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Aspose\Barcode\GenerateApi;
use Aspose\Barcode\Model\EncodeBarcodeType;
use Aspose\Barcode\Requests\BarcodeGenerateBarcodeTypeGetRequest;
use Aspose\BarCode\ApiException;
use Aspose\BarCode\Configuration;

require_once 'TestConfiguration.php';

class ExceptionTest extends TestCase
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
    }



    public function testExceptionMessageParsed(): void
    {
        $request = new BarcodeGenerateBarcodeTypeGetRequest(EncodeBarcodeType::QR, "");

        $thrown = false;
        try {
            self::$api->barcodeGenerateBarcodeTypeGet($request);
        } catch (ApiException $e) {
            $thrown = true;
            $this->assertEquals(400, $e->getCode());
            $this->assertNotNull($e->getResponseObject());
            $this->assertEquals(
                "1. Field name: 'Data'. Errors: The Data field is required.",
                $e->getResponseObject()->getError()->getMessage()
            );
        }

        $this->assertTrue($thrown);
    }
}
