<?php

require __DIR__.'/vendor/autoload.php';

use \App\Comunication\Alert;


Alert::sendMessage($_GET['id'],'Cadastrado com sucesso!');



header('Location:index.php');