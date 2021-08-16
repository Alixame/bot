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

echo '<script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-login="alixame_bot" data-size="large" data-auth-url="banco.php" data-request-access="write"></script>';

require __DIR__.'/vendor/autoload.php';

use App\Comunication\Alert;

if(isset($_GET['idchat'])){

  echo 'Sucesso!';

  Alert::sendMessage($idchat,'Cadastrado com sucesso!');

}

?>




</body>
</html>