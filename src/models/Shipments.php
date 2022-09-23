<?php
namespace notesow\SpediamoAPI\models;

/**
 * Shipments management
 */
class Shipments {    
    /**
     * create new shipment
     *
     * @param  mixed $data
     * @return void
     */
    public static function create(array $data){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments');
        return $request->post($data);
    }
    
    /**
     * delete shipment
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return void
     */
    public static function delete($id = null, array $data){
        if(is_null($id)){ $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments'); } 
        else { $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/' . $id); }
        
        return $request->delete($data);
    } 
    
    /**
     * estimate shipment
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return void
     */
    public static function estimate($id = null, array $data = array()){
        if(is_null($id)){ $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/estimate'); } 
        else { $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/' . $id . '/estimate/' ); }
        
        return $request->post($data);
    }
    
    /**
     * search for archived shipments
     *
     * @param  mixed $data
     * @return void
     */
    public static function archived(array $data = array()){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/search/archived');
        return $request->get($data);
    }
    
    /**
     * Search for shipments from status
     *
     * @param  mixed $status
     * @param  mixed $data
     * @return void
     */
    public static function status($status, array $data = array()){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/search/' . $status);
        return $request->get($data);
    }
        
    /**
     * read shipment default settings
     *
     * @return void
     */
    public static function settings(){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/settings');
        return $request->get();
    }
    
    /**
     * stream shipments
     *
     * @param  mixed $status
     * @param  mixed $data
     * @return void
     */
    public static function stream($status, array $data = array()){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/stream' . $status);
        return $request->get($data);
    }
    
    /**
     * read shipment tracking
     *
     * @param  mixed $trackingId
     * @return void
     */
    public static function tracking($trackingId){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/tracking');
        return $request->get(array('code' => $trackingId));
    }
    
    /**
     * read a shipment
     *
     * @param  mixed $shipmentId
     * @return void
     */
    public static function get($shipmentId){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/' . $shipmentId);
        return $request->get();
    }
    
    /**
     * modify a shipment
     *
     * @param  mixed $shipmentId
     * @param  mixed $data
     * @return void
     */
    public static function modify($shipmentId, array $data){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('shipments/' . $shipmentId);
        return $request->put($data);
    }
}