<?php

namespace App\Comunication;

class Message {

    /**
     *  URL da API
     */
    public $url = "https://api.telegram.org/bot1931534405:AAHdO9Q9CzySrR-pVg4Klk8pKvTK5xEbPro/getUpdates";

    private $message;
    private $updateId;
    private $chatId;

    public function getMessage(){

        return $this->message;

    }

    public function getUpdateId(){

        return $this->updateId;

    }

    public function getChatId(){

        return $this->chatId;

    }

    public function setMessage($message){

        $this->message = $message;
    
    }

    public function setUpdateId($updateId){

        $this->updateId = $updateId;

    }

    public function setChatId($chatId){

        $this->chatId = $chatId;

    }


    public function consomeAPI(){

        /**
         * INICIALIZANDO O CURL
         */
        $ch = curl_init($this->url); 

        /**
         * DEFININDO PAREMETROS DO CURL
         */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        /**
         * DECODIFICANDO A RESPONSE(JSON) DA EXECUÇÃO
         */
        $result = json_decode(curl_exec($ch));


        return $result;
    }
    
    public function __construct(){
        



    }

    public function botResponse($message,$chatId,$updateId){

        /**
        * VALIDA A MENSAGEM RECEBIDA
        */
        switch (strtolower($message)) {
            case 'oi': case 'ola':
                Alert::sendMessage($chatId,'Como posso ajuda-lo?');
                break;
            case 'gostaria de um aumento!':
                Alert::sendMessage($chatId,'Desista meu companheiro!');
                break;

            default:
                if(!isset($message)) {
                    break;
                } else {
                    Alert::sendMessage($chatId,'Não entendi, poderia repetir?');
                }
        }

        $urlDestroy = $this->url."?offset=".($updateId + 1);

        $ch = curl_init($urlDestroy); 
       

        curl_exec($ch);

    }


    






}