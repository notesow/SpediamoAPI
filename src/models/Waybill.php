<?php
namespace notesow\SpediamoAPI\models;

/**
 * Shipping documents
 */
class Waybill {    
    /**
     * read a waybill pdf
     *
     * @param  mixed $shipmentId
     * @return void
     */
    public static function pdf($shipmentId){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('waybills/' . $shipmentId . '/pdf');
        return $request->get();
    }
}