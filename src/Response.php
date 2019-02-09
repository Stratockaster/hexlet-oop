<?php

namespace Hexlet;

class Response
{
    private $as;
    private $city;
    private $country;
    private $countryCode;
    private $isp;
    private $lat;
    private $lon;
    private $long;
    private $query;
    private $region;
    private $regionName;
    private $status;
    private $timezone;
    private $zip;

    public static function createFrom($data): Response
    {
        $response = new self();

        foreach (json_decode($data, true) as $propName => $propValue)
        {
            $setterName = 'set' . $propName;
            if (method_exists(self::class, $setterName)) {
                $response->$setterName($propValue);
            }
        }

        return $response;
    }

    public function getAs()
    {
        return $this->as;
    }

    public function setAs($as): void
    {
        $this->as = $as;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country): void
    {
        $this->country = $country;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setCountryCode($countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    public function getIsp()
    {
        return $this->isp;
    }

    public function setIsp($isp): void
    {
        $this->isp = $isp;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setLat($lat): void
    {
        $this->lat = $lat;
    }

    public function getLon()
    {
        return $this->lon;
    }

    public function setLon($lon): void
    {
        $this->lon = $lon;
    }

    public function getLong()
    {
        return $this->long;
    }

    public function setLong($long): void
    {
        $this->long = $long;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setQuery($query): void
    {
        $this->query = $query;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region): void
    {
        $this->region = $region;
    }

    public function getRegionName()
    {
        return $this->regionName;
    }

    public function setRegionName($regionName): void
    {
        $this->regionName = $regionName;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setTimezone($timezone): void
    {
        $this->timezone = $timezone;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip): void
    {
        $this->zip = $zip;
    }

    public function toArray()
    {
        return [
            "as" => $this->as,
            "city" => $this->city,
            "country" => $this->country,
            "countryCode" => $this->countryCode,
            "isp" => $this->isp,
            "lat" => $this->lat,
            "lon" => $this->lon,
            "long" => $this->long,
            "query" => $this->query,
            "region" => $this->region,
            "regionName" => $this->regionName,
            "status" => $this->status,
            "timezone" => $this->timezone,
            "zip" => $this->zip,
        ];
    }
}