<?php

namespace Hexlet\GeoIpServices;

use GuzzleHttp\Client;

class IpApi implements GeoIpService
{
    private const URL = "http://ip-api.com/json/";

    private $client;

    public function __construct(array $userConfig = [])
    {
        $defaultConfig = [
            'timeout' => 2.0,
        ];
        $config = array_merge($defaultConfig, $userConfig);

        $this->client = new Client($config);
    }

    public function getGeo($ip = null): string
    {
        $url = self::URL;

        if ($ip) {
            $url .= $ip;
        }

        $response = $this->client->request("GET", $url);

        return $response->getBody()->getContents();
    }
}
