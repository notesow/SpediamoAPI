<?php
namespace notesow\SpediamoAPI\models;

/**
 * Claims management
 */
class Claims {    
    /**
     * create new claim
     *
     * @param  mixed $data
     * @return void
     */
    public static function claim(array $data){
       $request = new \notesow\SpediamoAPI\Http\HttpClient('claims');
       return $request->post($data);
    }
}

