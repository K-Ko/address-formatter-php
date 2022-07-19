<?php

namespace PredictHQ\AddressFormatter;

use PredictHQ\AddressFormatter\Formatter;

class Address implements \Stringable
{
    public function setAttention($val): Address
    {
        $this->attention = $val;

        return $this;
    }

    public function setHouseNumber($val): Address
    {
        $this->houseNumber = $val;

        return $this;
    }

    public function setHouse($val): Address
    {
        $this->house = $val;

        return $this;
    }

    public function setRoad($val): Address
    {
        $this->road = $val;

        return $this;
    }

    public function setVillage($val): Address
    {
        $this->village = $val;

        return $this;
    }

    public function setSuburb($val): Address
    {
        $this->suburb = $val;

        return $this;
    }

    public function setCity($val): Address
    {
        $this->city = $val;

        return $this;
    }

    public function setCounty($val): Address
    {
        $this->county = $val;

        return $this;
    }

    public function setPostcode($val): Address
    {
        $this->postcode = $val;

        return $this;
    }

    public function setStateDistrict($val): Address
    {
        $this->stateDistrict = $val;

        return $this;
    }

    public function setState($val): Address
    {
        $this->state = $val;

        return $this;
    }

    public function setRegion($val): Address
    {
        $this->region = $val;

        return $this;
    }

    public function setIsland($val): Address
    {
        $this->island = $val;

        return $this;
    }

    public function setCountry($val): Address
    {
        $this->country = $val;

        return $this;
    }

    public function setCountryCode($val): Address
    {
        $this->countryCode = $val;

        return $this;
    }

    public function setContinent($val): Address
    {
        $this->continent = $val;

        return $this;
    }

    public function getAttention(): string
    {
        return $this->attention;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function getHouse(): string
    {
        return $this->house;
    }

    public function getRoad(): string
    {
        return $this->road;
    }

    public function getVillage(): string
    {
        return $this->village;
    }

    public function getSuburb(): string
    {
        return $this->suburb;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCounty(): string
    {
        return $this->county;
    }

    public function getPostcode(): string
    {
        return $this->postcode;
    }

    public function getStateDistrict(): string
    {
        return $this->stateDistrict;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getIsland(): string
    {
        return $this->island;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getContinent(): string
    {
        return $this->continent;
    }

    public function format(array $options = []): string
    {
        // Buffer Formatter instance to load templates only once
        if (!self::$formatter) {
            self::$formatter = new Formatter();
        }

        return self::$formatter->format($this, $options);
    }

    public function __toString(): string
    {
        return $this->format();
    }

    private static $formatter;

    private $attention     = '';
    private $houseNumber   = '';
    private $house         = '';
    private $road          = '';
    private $village       = '';
    private $suburb        = '';
    private $city          = '';
    private $county        = '';
    private $postcode      = '';
    private $stateDistrict = '';
    private $state         = '';
    private $region        = '';
    private $island        = '';
    private $country       = '';
    private $countryCode   = '';
    private $continent     = '';
}
