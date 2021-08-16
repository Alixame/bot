<?php

require __DIR__."/vendor/autoload.php";

use App\Comunication\Alert;

var_dump($_GET);
$id_chat=$_GET['id'];//id do chat
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$auth_date=$_GET['auth_date'];
$hash=$_GET['hash'];


$conn= new PDO("mysql:dbname=banco_riosoft;host=localhost","root","");

$stmt=$conn->prepare("insert into tb_usuario_telegram(nome,sobrenome,data_auth,hashing,id_chat) values('$first_name','$last_name','$auth_date','$hash','$id_chat')");

if($stmt->execute())
{
    Alert::sendMessage($id_chat,'Cadastrado com sucesso!');
    header("Location: index.php?cadastred=success");
}
else
{    
    header("Location: index.php?cadastred=failed");
}
?>