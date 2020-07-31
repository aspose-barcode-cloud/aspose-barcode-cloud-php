<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Aspose\BarCode\Configuration;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


final class ConfigurationTest extends TestCase
{
    public function testConfigurationJsonEncode(): void
    {
        $config = new Configuration();
        $config->setAppKey('api key');
        $config->setAppSid('app sid');
        $config->setHost('https://api-qa.aspose.cloud');
        $config->setAccessToken('access token');

        $json = json_encode($config, JSON_PRETTY_PRINT);

        $this->assertEquals(
            '{
    "AppKey": "api key",
    "AppSid": "app sid",
    "Host": "https:\\/\\/api-qa.aspose.cloud",
    "AccessToken": "access token",
    "Debug": false
}',
            $json
        );
    }

    public function testConfigurationFromJson(): void
    {
        $config = new Configuration();
        $config->setAppKey('api key');
        $config->setAppSid('app sid');
        $config->setHost('https://api-qa.aspose.cloud');
        $config->setAccessToken('access token');
        $json = json_encode($config, JSON_PRETTY_PRINT);

        $deserialized = TestConfiguration::fromJson($json);

        $this->assertEquals($config, $deserialized);
    }

    public function testConfigurationFromEnv(): void
    {
        $uniqPrefix = uniqid();
        putenv("${uniqPrefix}_ACCESS_TOKEN=Access Token");
        putenv("${uniqPrefix}_APP_SID=App Sid");
        putenv("${uniqPrefix}_APP_KEY=App Key");
        putenv("${uniqPrefix}_HOST=Host");
        putenv("${uniqPrefix}_DEBUG=FALSE");

        $config = TestConfiguration::fromEnv($uniqPrefix . '_');

        $this->assertEquals("Access Token", $config->getAccessToken());
        $this->assertEquals("App Sid", $config->getAppSid());
        $this->assertEquals("App Key", $config->getAppKey());
        $this->assertEquals("Host", $config->getHost());
        $this->assertEquals(false, $config->getDebug());
    }

    public function testConfigurationFromFile(): void
    {
        $config = TestConfiguration::fromFileOrEnv('Configuration.example.json');

        $this->assertEquals('App Key from https://dashboard.aspose.cloud/#/apps', $config->getAppKey());
        $this->assertEquals('App SID from https://dashboard.aspose.cloud/#/apps', $config->getAppSid());
        $this->assertEquals('https://api.aspose.cloud', $config->getHost());
    }

    public function testConfigurationUserAgent(): void
    {
        $config = new Configuration();

        $config->setUserAgent('My sample app');

        $this->assertEquals('My sample app', $config->getUserAgent());
    }
}
