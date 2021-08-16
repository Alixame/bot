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


$obMessage = new Message();



$result = $obMessage->consomeAPI();

if(!$result->result == null){

    $countMensagem = count($result->result); 

        $firstMessage = array_key_first($result->result);


        $obMessage->setMessage($result->result[$firstMessage]->message->text);
        $obMessage->setUpdateId($result->result[$firstMessage]->update_id);
        $obMessage->setChatId($result->result[$firstMessage]->message->from->id);

        $message  = $obMessage->getMessage();
        $chatId = $obMessage->getChatId();
        $updateId = $obMessage->getUpdateId();


        $obMessage->botResponse($message,$chatId,$updateId);
        
}



