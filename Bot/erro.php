<?php

require __DIR__.'/vendor/autoload.php';

use \App\Comunication\Alert;

try {
    
    $codigo = $argv[1] ?? 0;   
    
    if($codigo != 1 ){
        throw new \Exception("Codigo invalido - valor esperado 1 , digite novamente", 400);
    }

    echo 'Sucesso';

} catch (\Exception $e) {
    
    echo $e->getMessage()."\n";

    Alert::sendMessage($_GET['id'],$e->getCode().': '.$e->getMessage());
}