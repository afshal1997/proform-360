<?php

namespace App\Services;

use stdClass;

class CountryStateCity
{
    protected $countries = [];
    protected $states = [];
    protected $cities = [];

    public function __construct(string $jsonDirectory = '')
    {
        $jsonDirectory = __DIR__ . '/' . $jsonDirectory;
        $this->countries = json_decode(file_get_contents("$jsonDirectory/country.json"), false);
        $this->states = json_decode(file_get_contents("$jsonDirectory/state.json"), false);
        $this->cities = json_decode(file_get_contents("$jsonDirectory/city.json"), false);
    }

    /*
     * Get A List Of All Countries
     * ---------------------------
     */
    final public function getAllCountries(): array
    {
        return $this->countries;
    }

    /*
     * Get All States Within A Country By CountryID
     * --------------------------------------------
     */
    final public function getStatesOfCountryById(string $countryId): array
    {
        return array_filter($this->states, static function ($state) use ($countryId) {
            return $state->country_id === $countryId;
        });
    }

    /*
     * Get All Cities Within A State By StateID
     * ----------------------------------------
     */
    final public function getCitiesOfStateById(string $stateId): array
    {
        return array_filter($this->cities, static function ($city) use ($stateId) {
            return $city->state_id === $stateId;
        });
    }

    /*
     * Get A Single Country By CountryID
     * ---------------------------------
     */
    final public function getCountryById(string $countryId): stdClass
    {
        return array_find($this->countries, static function ($country) use ($countryId) {
            return $country->id === $countryId;
        });
    }

    /*
     * Get A Single State By StateID
     * -----------------------------
     */
    final public function getStateById(string $stateId): stdClass
    {
        return array_find($this->states, static function ($state) use ($stateId) {
            return $state->id === $stateId;
        });
    }

    /*
     * Get A Single City By CityID
     * ---------------------------
     */
    final public function getCityById(string $cityId): stdClass
    {
        return array_find($this->cities, static function ($city) use ($cityId) {
            return $city->id === $cityId;
        });
    }
}
