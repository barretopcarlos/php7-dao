<?php 
require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("car");
// echo json_encode($search);


//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("carlos", "querty1234");
echo $usuario;

/*

//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;


//Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
*/
// echo "<br>";
// echo "<br>";

// $usuario = new Usuario();
// $usuario->loadById(5);
// //$usuario->delete();
// echo $usuario;
 ?>