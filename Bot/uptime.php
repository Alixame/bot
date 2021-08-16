<?php

require __DIR__.'/vendor/autoload.php';

use \App\Comunication\Alert;

try {
    
    //URL DE VERIFICAÇÃO
    $url = 'https://github.com/Alixame';

    //CONFIGURAÇÃO DO CURL
    $curl = curl_init($url);
    curl_setopt_array($curl,[
        CURLOPT_HEADER => true,
        CURLOPT_NOBODY => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ]);

    //EXECUTAR A REQUISIÇÃO DO CURL
    curl_exec($curl);

    // CODIGO DE STATUS DA RESPONSE
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    //FECHA A CONEXÃO CURL
    curl_close($curl);  
        

    if($httpCode == 200 ){
        throw new \Exception('ATENÇÃO! A url: "'.$url.'" retornou o status "'.$httpCode.'".', $httpCode);
    }else{
        
    }

    echo 'Sucesso';

} catch (\Exception $e) {
    
    echo $e->getMessage()."\n";

    Alert::sendMessage($_GET['id'],$e->getCode().': '.$e->getMessage());
}