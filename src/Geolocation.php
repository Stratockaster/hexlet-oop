<?php

namespace Hexlet;

use Hexlet\GeoIpServices\GeoIpService;

class Geolocation
{
    private $geoIpService;

    public function __construct(GeoIpService $geoIpService)
    {
        $this->geoIpService = $geoIpService;
    }

    public function identify()
    {
        return $this->geoIpService->getGeo();
    }
}
