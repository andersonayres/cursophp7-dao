<?php 

require_once("config.php");
//Carrega um usuario.
//$root = new Usuario();
//$root->loadbyId(1);
//echo($root);
 
//Carrega uma lsita de usuários.

//$Lista = Usuario::getList();
//echo json_encode(
//$Lista);

//Carrega uma lista de usuarios buscando pelo login.

//$search = Usuario::search("a");
 //echo json_encode($search);

//Buscando usuario autenticados.

$usuario = new Usuario();
$usuario->login("jose", "123456");

echo $usuario;

 ?> 