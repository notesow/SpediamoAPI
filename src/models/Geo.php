<?php
namespace notesow\SpediamoAPI\models;

/**
 * Countries, provinces. towns
 */
class Geo {    
    /**
     * read countries
     *
     * @return void
     */
    public static function getCountries(){
       $request = new \notesow\SpediamoAPI\Http\HttpClient('countries');
       return $request->get();
    }
    
    /**
     * read holidays
     *
     * Read holidays list for the given country.
     * Currently, only supported country is Italy (IT).
     * Returns all knows holidays starting from today, for the next 365 days.
     * 
     * @param  mixed $country
     * @return void
     */
    public static function getHolidays($country = 'IT'){
        
        $request = new \notesow\SpediamoAPI\Http\HttpClient('countries/' . $country . '/holidays');
        return $request->get();       
    }
    
    /**
     * read provinces
     *
     * Read provinces list for the given country.
     * Currently, only supported country is Italy (IT).
     * 
     * @param  mixed $country
     * @return void
     */
    public static function getProvinces($country = 'IT'){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('countries/' . $country . '/provinces');
        return $request->get();  
    }
    
    /**
     * read towns with additional surcharges information
     *
     * Read towns list for the given province in the given country, providing additional information about surcharges asked by the couriers.
     * Currently, only supported country is Italy (IT).
     * 
     * @param  mixed $country
     * @param  mixed $province
     * @return void
     */
    public static function getTowns($country = 'IT', $province = 'PA'){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('countries/' . $country . '/provinces/' . $province . '/towns');
        return $request->get();  
    }
}

