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

/** Guzzle **/
require_once __DIR__ . '/src/vendor/autoload.php';

/** Main **/
require_once __DIR__ . '/src/SpediamoAPI.php';

/** Interfaces **/
require_once __DIR__ . '/src/exceptions/IException.php';

/** Exceptions **/
require_once __DIR__ . '/src/exceptions/Handler.php';

/** Http **/
require_once __DIR__ . '/src/Http/HttpClient.php';

/** Models **/
require_once __DIR__ . '/src/models/Addresses.php';
require_once __DIR__ . '/src/models/Claims.php';
require_once __DIR__ . '/src/models/Geo.php';
require_once __DIR__ . '/src/models/Shipments.php';
require_once __DIR__ . '/src/models/TaxDocuments.php';
require_once __DIR__ . '/src/models/Waybill.php';