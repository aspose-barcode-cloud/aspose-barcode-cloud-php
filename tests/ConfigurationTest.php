<?php

declare(strict_types=1);

use Aspose\BarCode\Configuration;
use PHPUnit\Framework\TestCase;

require_once 'TestConfiguration.php';


final class ConfigurationTest extends TestCase
{
    public function testConfigurationJsonEncode(): void
    {
        $config = new Configuration();
        $config->setClientId('client id');
        $config->setClientSecret('client secret');
        $config->setHost('http://localhost:47972');
        $config->setAuthUrl('http://localhost:47972/connect/token');
        $config->setAccessToken('access token');

        $json = json_encode($config, JSON_PRETTY_PRINT);
        // Fix line endings on Windows
        $json = preg_replace("/(?<=[^\r]|^)\n/", PHP_EOL, $json);

        $this->assertEquals(
            '{
    "ClientId": "client id",
    "ClientSecret": "client secret",
    "Host": "http:\\/\\/localhost:47972",
    "AuthUrl": "http:\\/\\/localhost:47972\\/connect\\/token",
    "AccessToken": "access token",
    "Debug": false
}',
            $json
        );
    }

    public function testConfigurationFromJson(): void
    {
        $config = new Configuration();
        $config->setClientId('client id');
        $config->setClientSecret('client secret');
        $config->setHost('http://localhost:47972');
        $config->setAuthUrl('http://localhost:47972/connect/token');
        $config->setAccessToken('access token');
        $json = json_encode($config, JSON_PRETTY_PRINT);

        $deserialized = TestConfiguration::fromJson($json);

        $this->assertEquals($config, $deserialized);
    }

    public function testConfigurationFromEnv(): void
    {
        $uniqPrefix = uniqid();
        putenv("{$uniqPrefix}_ACCESS_TOKEN=Access Token");
        putenv("{$uniqPrefix}_CLIENT_ID=Client Id");
        putenv("{$uniqPrefix}_CLIENT_SECRET=Client Secret");
        putenv("{$uniqPrefix}_HOST=Host");
        putenv("{$uniqPrefix}_DEBUG=FALSE");

        $config = TestConfiguration::fromEnv($uniqPrefix . '_');

        $this->assertEquals("Access Token", $config->getAccessToken());
        $this->assertEquals("Client Id", $config->getClientId());
        $this->assertEquals("Client Secret", $config->getClientSecret());
        $this->assertEquals("Host", $config->getHost());
        $this->assertFalse($config->getDebug());
    }

    public function testConfigurationFromFile(): void
    {
        $config = TestConfiguration::fromFileOrEnv('Configuration.example.json');

        $this->assertEquals('Client Id from https://dashboard.aspose.cloud/applications', $config->getClientId());
        $this->assertEquals('Client Secret from https://dashboard.aspose.cloud/applications', $config->getClientSecret());
        $this->assertEquals('https://api.aspose.cloud', $config->getHost());
    }

    public function testConfigurationUserAgent(): void
    {
        $config = new Configuration();

        $config->setUserAgent('My sample app');

        $this->assertEquals('My sample app', $config->getUserAgent());
    }
}
