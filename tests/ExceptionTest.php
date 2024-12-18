<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Aspose\BarCode\GenerateApi;
use Aspose\BarCode\Model\EncodeBarcodeType;
use Aspose\BarCode\Requests\GenerateRequestWrapper;
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
        $request = new GenerateRequestWrapper(EncodeBarcodeType::QR, "");

        $thrown = false;
        try {
            self::$api->generate($request);
        } catch (ApiException $e) {
            $thrown = true;
            $this->assertEquals(400, $e->getCode());
            $this->assertNotNull($e->getResponseObject());
            $this->assertEquals(
                "Error: Field name: 'Data' errors: The Data field is required.",
                $e->getResponseObject()->getError()->getMessage()
            );
        }

        $this->assertTrue($thrown);
    }
}
