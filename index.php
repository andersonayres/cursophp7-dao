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

//$usuario = new Usuario();
//$usuario->login("jose", "123456");

//echo $usuario;

//insert criando outro usuario
//$aluno = new Usuario("aluno", "@alunos");

//$aluno->insert();

//echo $aluno;

//update nos usuários
//$usuario = new Usuario();
//$usuario->loadbyId(9);

//$usuario->update("professor 2", "123qwe2");

//delete usuário

$usuário = new Usuario();
$usuário->loadbyId(9);

$usuário->delete();
echo $usuário;

echo $usuário;
 ?> 








