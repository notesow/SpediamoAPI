<?php
namespace notesow\SpediamoAPI\Http;

use notesow\SpediamoAPI\SpediamoAPI;

/**
 * HttpClient
 */
class HttpClient {
    protected $client = null;
    protected $endpoint = null;
    protected $response = null;
    
    /**
     * __construct
     *
     * @param  mixed $endpoint API
     * @return void
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
        $this->client = new \GuzzleHttp\Client(
            [
                'base_uri' => SpediamoAPI::$BASE_URL. SpediamoAPI::$API_VERSION,
                'headers' => [
                    'Content-Type' => SpediamoAPI::$CONTENT_TYPE,
                    'Authorization' => SpediamoAPI::$API_KEY,
                ]
            ]
        );    
        return $this;
    }
    
    /**
     * $_GET[]
     *
     * @param  mixed $data
     * @return void
     */
    public function get(array $data = array()) {
       return $this->response($this->client->get(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * $_POST[]
     *
     * @param  mixed $data
     * @return void
     */
    public function post(array $data = array()) {
        return $this->response($this->client->post(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * head
     *
     * @param  mixed $data
     * @return void
     */
    public function head(array $data = array()) {
        return $this->response($this->client->head(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * put
     *
     * @param  mixed $data
     * @return void
     */
    public function put(array $data = array()) {
        return $this->response($this->client->put(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * delete
     *
     * @param  mixed $data
     * @return void
     */
    public function delete(array $data = array()) {
        return $this->response($this->client->delete(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * options
     *
     * @param  mixed $data
     * @return void
     */
    public function options(array $data = array()) {
        return $this->response($this->client->options(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * patch
     *
     * @param  mixed $data
     * @return void
     */
    public function patch(array $data = array()) {
        return $this->response($this->client->patch(ltrim($this->endpoint, '/'), $data));
    }
    
    /**
     * response
     *
     * @param  mixed $response
     * @return void
     */
    private function response(\Psr\Http\Message\ResponseInterface $response)
    {
        if($response->getStatusCode() == 200){
            $body = $response->getBody();

            return json_decode(
                $body->getContents(), TRUE
            );
        } else {
            return false;
        }
        
    }
}


