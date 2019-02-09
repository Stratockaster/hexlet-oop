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

        foreach (json_decode($data, true) as $propName => $propValue) {
            if (property_exists(self::class, $propName)) {
                $response->$propName = $propValue;
            }
        }

        return $response;
    }

    public function getAs()
    {
        return $this->as;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function getIsp()
    {
        return $this->isp;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function getLon()
    {
        return $this->lon;
    }

    public function getLong()
    {
        return $this->long;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getRegionName()
    {
        return $this->regionName;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function getZip()
    {
        return $this->zip;
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