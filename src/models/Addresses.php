<?php
namespace notesow\SpediamoAPI\models;

/**
 * Address book management
 */

class Addresses {    

    /**
     * create new address
     *
     * @param  mixed $data
     * @return void
     */
    public static function create(array $data){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses');
        return $request->post($data);
    }     
    
    /**
     * delete address
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return void
     */
    public static function delete($id = null, array $data){
        if(is_null($id)){ $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses'); } 
        else { $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses/' . $id); }
        
        return $request->delete($data);
    } 
    
    /**
     * read address default settings
     *
     * @return void
     */
    public static function settings(){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses/settings');
        return $request->get();
    } 
    
    /**
     * stream address book
     *
     * @return void
     */
    public static function stream(){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses/stream');
        return $request->get();
    } 
    
    /**
     * read an address
     *
     * @param  mixed $id
     * @return void
     */
    public static function read($id){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses/' . $id);
        return $request->get();
    } 
    
    /**
     * modify an address
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return void
     */
    public static function modify($id, array $data){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses/' . $id);
        return $request->put($data);
    }
    
    /**
     * mark as preferred
     *
     * Modify address preferred flag. The address ETag header is added to the response.
     * 
     * @param  mixed $id
     * @param  mixed $prefered
     * @return void
     */
    public static function markAsPreferred($id, $prefered = true){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('addresses/' . $id . '/preferred');
        return $request->put(array('preferred' => $prefered));
    }
}
