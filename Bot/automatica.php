<?php 

header("Refresh:1");

session_start();

/**
 * INCLUINDO O AUTOLOAD DAS CLASSES
 */
require __DIR__.'/vendor/autoload.php';

/**
 * USANDO AUTOLOAD DAS CLASSES
 */
use \App\Comunication\Message;

//INSTANCIANDO UM OBJETO DA CLASSE MESSAGE
$obMessage = new Message();

// ARMAZENANDO NA VARIAVEL RESULT O RETORNO DA FUNÇÃO DE CONSULTA A API
$result = $obMessage->consomeAPI();

// VERIFICA RESULTADO
if(!$result->result == null){

    // ARMAZENANDO NA VARIAVEL CONTMESSAGE O VALOR OBTIDO NA CONTA DO ARREY
    $countMensagem = count($result->result); 
        
        // ARMAZENANDO O PRIMEIRO VALOR DO ARRAY
        $firstMessage = array_key_first($result->result);

        $obMessage->setMessage($result->result[$firstMessage]->message->text);
        $obMessage->setUpdateId($result->result[$firstMessage]->update_id);
        $obMessage->setChatId($result->result[$firstMessage]->message->from->id);

        $message  = $obMessage->getMessage();
        $chatId = $obMessage->getChatId();
        $updateId = $obMessage->getUpdateId();


        $obMessage->botResponse($message,$chatId,$updateId);
        
}



