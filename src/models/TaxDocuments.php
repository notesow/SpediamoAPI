<?php
namespace notesow\SpediamoAPI\models;

/**
 * Invoices and credit notes
 */
class TaxDocuments {    
    /**
     * search for tax documents
     *
     * @param  mixed $data
     * @return void
     */
    public static function search(array $data){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('taxDocuments/search');
        return $request->get($data);
    }
    
    /**
     * read a tax document
     *
     * @param  mixed $documentId
     * @return void
     */
    public static function read($documentId){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('taxDocuments/' . $documentId);
        return $request->get();
    }
    
    /**
     * read a tax document pdf (either an invoice or a credit note)
     * 
     * @param  mixed $documentId
     * @return void
     */
    public static function pdf($documentId){
        $request = new \notesow\SpediamoAPI\Http\HttpClient('taxDocuments/' . $documentId . '/pdf');
        return $request->get();
    }
}