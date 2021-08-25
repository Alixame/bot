<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php

/**
 * INCLUINDO O AUTOLOAD DAS CLASSES
 */
require __DIR__.'/vendor/autoload.php';

/**
 * MOSTRANDO BOTÃO DE LOGIN TELEGRAM
 */
echo '<script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-login="alixame_bot" data-size="large" data-auth-url="banco.php" data-request-access="write"></script>';


/**
 * USANDO NAMESPACE DA CLASSE
 */
use App\Comunication\Alert;

/**
 * VERIFICANDO SE A VARIAVEL EXISTE NA SUPERGLOBAL GET
 */
if(isset($_GET['idchat'])){

  // UTILIZANDO O A CALSSE ALERT , USANDO A FUNÇÃO ESTATICA PARA MANDAR A MENSAGEM ATRAVES DO BOT
  Alert::sendMessage($idchat,'Cadastrado com sucesso!');

  // IMPRIMINDO SUCESSO
  echo 'Sucesso!';
}

?>




</body>
</html>