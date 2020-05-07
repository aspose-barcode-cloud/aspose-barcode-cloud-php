<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Aspose\BarCode\Configuration;

final class ConfigurationTest extends TestCase
{
    public function testConfigurationJsonEncode(): void
    {
        $config = new Configuration();
        $config->setAppKey("api key");
        $config->setAppSid("app sid");
        $config->setHost('https://api-qa.aspose.cloud');

        $json = json_encode($config, JSON_PRETTY_PRINT);

        $this->assertEquals('{
    "AppKey": "api key",
    "AppSid": "app sid",
    "Host": "https:\/\/api-qa.aspose.cloud"
}',
            $json
        );
    }

    public function testConfigurationFromJson(): void
    {
        $config = new Configuration();
        $config->setAppKey("api key");
        $config->setAppSid("app sid");
        $config->setHost('https://api-qa.aspose.cloud');
        $json = json_encode($config, JSON_PRETTY_PRINT);

        $deserialized = Configuration::fromJson($json);

        $this->assertEquals($config, $deserialized);
    }

    public function testConfigurationFromFile(): void
    {
        $json = file_get_contents("Configuration.json.template", TRUE);

        $config = Configuration::fromJson($json);

        $this->assertEquals("Test.AppKey", $config->getAppKey());
        $this->assertEquals("Test.AppSid", $config->getAppSid());
        $this->assertEquals("https://api.aspose.com", $config->getHost());
    }
}
