<?php
/**
 * @copyright 2022 | Note SOW 
 * @package spediamoAPI
 * @author Davide Perricone
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * This class was developed to connect PHP frameworks with the spediamo.it
 * shipping system. This library is unofficial and uses the connection protocols
 * of the cms. No copyright infringement.
 * Released, developed and maintain by @NOTESOW
 *
 */


namespace notesow\SpediamoAPI;

/**
 * Spediamo.it API for PHP.
 */
class SpediamoAPI
{

    /** @var string The base URL for the SpediamoAPI. */
    public static $BASE_URL = 'https://api.spediamo.it/';

    /** @var string The base URL for the SpediamoAPI. */
    public static $API_VERSION = 'v1/';

    /** @var string The base content type for the SpediamoAPI. */
    public static $CONTENT_TYPE = '';

    /** @var string The SpediamoAPI key to be used for requests. */
    public static $API_KEY = null;
    
    /**
     * __construct
     *
     * @param  mixed $API
     * @return void
     */
    public function __construct(string $API)
    {
        if (\is_string($API)) {
            self::$API_KEY = $API;
        } else {
            throw new \notesow\SpediamoAPI\Exceptions\Handler('API Key must be a string');
        }
    }
}

