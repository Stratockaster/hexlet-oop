<?php

namespace Hexlet;

use Hexlet\GeoIpServices\DummyIp;
use PHPUnit\Framework\TestCase;

class GeolocationTest extends TestCase
{
    public function testIdentify()
    {
        $geoIpService = new DummyIp();
        $geo = new Geolocation($geoIpService);

        $expected = '{"as":"AS1586 DoD Network Information Center","city":"Sierra Vista","country":"United States","countryCode":"US","isp":"DoD Network Information Center","lat":31.5552,"lon":-110.35,"org":"USAISC","query":"134.234.3.2","region":"AZ","regionName":"Arizona","status":"success","timezone":"America/Phoenix","zip":"85613"}';

        $this->assertEquals($expected, $geo->identify());
    }
}
