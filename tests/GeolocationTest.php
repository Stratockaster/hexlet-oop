<?php

namespace Hexlet;

use PHPUnit\Framework\TestCase;

class GeolocationTest extends TestCase
{
    public function testIdentifyDefault()
    {
        $geoIpService = new DummyIp();
        $geo = new Geolocation($geoIpService);

        $expected = 'Sierra Vista';

        $this->assertEquals($expected, $geo->identify()->getCity());
    }

    public function testIdentifyWithIp()
    {
        $ip = DummyIp::GOOGLE_IP;
        $geoIpService = new DummyIp();
        $geo = new Geolocation($geoIpService);

        $expected = 'Mountain View';

        $this->assertEquals($expected, $geo->identify($ip)->getCity());
    }
}
