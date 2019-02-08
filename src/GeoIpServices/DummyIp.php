<?php

namespace Hexlet\GeoIpServices;

class DummyIp implements GeoIpService
{
    public function getGeo()
    {
        return '{"as":"AS1586 DoD Network Information Center","city":"Sierra Vista","country":"United States","countryCode":"US","isp":"DoD Network Information Center","lat":31.5552,"lon":-110.35,"org":"USAISC","query":"134.234.3.2","region":"AZ","regionName":"Arizona","status":"success","timezone":"America/Phoenix","zip":"85613"}';
    }
}
