<?php

namespace Hexlet\GeoIpServices;

interface GeoIpService
{
    public function getGeo($id = null);
}
