<?php

namespace Hexlet\GeoIpServices;

class IpApi implements GeoIpService
{
    private const URL = "http://ip-api.com/json/";

    private $url;

    public function __construct($ip = null)
    {
        $url = self::URL;
        if ($ip) {
            $url .= $ip;
        }

        $this->url = $url;
    }

    public function getGeo()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
}
