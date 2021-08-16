<?php

/**
 * INCLUINDO O AUTOLOAD DAS CLASSES
 */
require __DIR__.'/vendor/autoload.php';

/**
 * USANDO AUTOLOAD DAS CLASSES
 */
use \App\Comunication\Alert;

/**
 *  URL da API
 */
$url = "https://api.telegram.org/bot1931534405:AAHdO9Q9CzySrR-pVg4Klk8pKvTK5xEbPro/getUpdates";

/**
 * INICIALIZANDO O CURL
 */
$ch = curl_init($url); 

/**
 * DEFININDO PAREMETROS DO CURL
 */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

/**
 * DECODIFICANDO A RESPONSE(JSON) DA EXECUÇÃO
 */
$result = json_decode(curl_exec($ch));

echo "<pre>";

echo "</pre>";