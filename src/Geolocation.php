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

    public function identify($ip = null): Response
    {
        $data = $this->geoIpService->getGeo($ip);

        $response = Response::createFrom($data);

        return $response;
    }
}
