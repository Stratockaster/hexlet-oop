<?php

namespace Hexlet\GeoIpServices;

use GuzzleHttp\Client;

class IpApi implements GeoIpService
{
    private const URL = "http://ip-api.com/json/";

    public function getGeo($ip = null)
    {
        $url = self::URL;
        if ($ip) {
            $url .= $ip;
        }

        $client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);

        $response = $client->request("GET");

        return $response->getBody()->getContents();
    }
}
