<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Aspose\BarCode\BarCodeApi;
use Aspose\BarCode\Configuration;
use Aspose\BarCode\Requests\GetBarcodeGenerateRequest;
use Aspose\BarCode\Requests\PostBarcodeRecognizeFromUrlOrContentRequest;
use PHPUnit\Framework\TestCase;

final class EndToEndTest extends TestCase
{
	public function testGenerateAndRecognize(): void
	{
		$config = Configuration::fromJson(file_get_contents("Configuration.json", TRUE));
		$api = new BarCodeApi(null, $config);

        // Generate

		$genRequest = new GetBarCodeGenerateRequest("QR", "PHP SDK Test");
		$genRequest->format = "png";

		$genResponse = $api->GetBarCodeGenerate($genRequest);

		$imageSize = $genResponse->getSize();
		$this->assertGreaterThan(0, $imageSize);

        // Recognize

		$recognizeRequest = new PostBarCodeRecognizeFromUrlorContentRequest();
		$recognizeRequest->image = $genResponse;

		$recognizeResponse = $api->PostBarCodeRecognizeFromUrlorContent($recognizeRequest);
		$this->assertNotEmpty($recognizeResponse);

        $this->assertEquals('QR', $recognizeResponse->getBarcodes()[0]->getType());
		$this->assertEquals('PHP SDK Test', $recognizeResponse->getBarcodes()[0]->getBarcodeValue());
	}
}
