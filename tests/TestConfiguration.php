<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Aspose\BarCode\Configuration;

class TestConfiguration
{
    public static function fromJson(string $jsonString): Configuration
    {
        $values = json_decode($jsonString, true);

        $config = new Configuration();
        if (isset($values['ClientId'])) {
            $config->setClientId($values['ClientId']);
        }
        if (isset($values['ClientSecret'])) {
            $config->setClientSecret($values['ClientSecret']);
        }
        if (isset($values['Host'])) {
            $config->setHost($values['Host']);
        }
        if (isset($values['AuthUrl'])) {
            $config->setAuthUrl($values['AuthUrl']);
        }
        if (isset($values['AccessToken'])) {
            $config->setAccessToken($values['AccessToken']);
        }
        if (isset($values['Debug'])) {
            $config->setDebug($values['Debug']);
        }

        return $config;
    }

    public static function fromEnv(string $prefix): Configuration
    {
        $config = new Configuration();
        if (getenv($prefix . 'CLIENT_ID')) {
            $config->setClientId(getenv($prefix . 'CLIENT_ID'));
        }
        if (getenv($prefix . 'CLIENT_SECRET')) {
            $config->setClientSecret(getenv($prefix . 'CLIENT_SECRET'));
        }
        if (getenv($prefix . 'HOST')) {
            $config->setHost(getenv($prefix . 'HOST'));
        }
        if (getenv($prefix . 'AUTH_URL')) {
            $config->setAuthUrl(getenv($prefix . 'AUTH_URL'));
        }
        if (getenv($prefix . 'ACCESS_TOKEN')) {
            $config->setAccessToken(getenv($prefix . 'ACCESS_TOKEN'));
        }
        if (getenv($prefix . 'DEBUG')) {
            $config->setDebug(filter_var(getenv($prefix . 'DEBUG'), FILTER_VALIDATE_BOOLEAN));
        }

        return $config;
    }

    public static function fromFileOrEnv(string $filename = 'Configuration.json', string $prefix = 'TEST_'): Configuration
    {
        $contents = false;
        try {
            $contents = @file_get_contents($filename, true);
        } catch (Exception $e) {
        }

        if ($contents !== false) {
            return self::fromJson($contents);
        }

        return self::fromEnv($prefix);
    }
}
