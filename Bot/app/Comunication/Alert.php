<?php

namespace App\Comunication;

use TelegramBot\Api\BotApi;

class Alert{

    /**
     * TOKEN DE ACESSO AO BOT
     *  @var string
     */
    const TELEGRAM_BOT_TOKEN = '1931534405:AAHdO9Q9CzySrR-pVg4Klk8pKvTK5xEbPro';

    /**
     * ID DA CONVERSA COM O BOT
     * @var integer
     */
     public $chatID;

    /**
     * Metodo responsavel por enviar a mensagem de alerta
     *
     * @param string $message
     * @return boolean
     */
    public static  function sendMessage($id,$message){
        //instrancia do bot com o token gerado
        $obBotApi = new BotApi(self::TELEGRAM_BOT_TOKEN);

        //Envia a mensagem para o telegram
        return $obBotApi->sendMessage($id, $message);
    }




}