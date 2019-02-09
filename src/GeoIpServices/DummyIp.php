<?php

namespace Hexlet\GeoIpServices;

class DummyIp implements GeoIpService
{
    public const GOOGLE_IP = '8.8.8.8';
    public const DEFAULT_IP = '134.234.3.2';

    private $data = [
        self::GOOGLE_IP => '{"as":"AS15169 Google LLC","city":"Mountain View","country":"United States","countryCode":"US","isp":"Level 3 Communications","lat":37.4229,"lon":-122.085,"org":"Google Inc.","query":"8.8.8.8","region":"CA","regionName":"California","status":"success","timezone":"America/Los_Angeles","zip":"94043"}',
        self::DEFAULT_IP => '{"as":"AS1586 DoD Network Information Center","city":"Sierra Vista","country":"United States","countryCode":"US","isp":"DoD Network Information Center","lat":31.5552,"lon":-110.35,"org":"USAISC","query":"134.234.3.2","region":"AZ","regionName":"Arizona","status":"success","timezone":"America/Phoenix","zip":"85613"}'
    ];

    public function getGeo($ip = null): string
    {
        if ($ip) {
            return $this->data[$ip];
        }

        return $this->data[self::DEFAULT_IP];
    }
}
