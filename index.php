<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);


$root = new Usuario();
$root->loadById(2);
echo $root;



// chamando um metodo static - CLASSE::METODO
$lista = Usuario::getList();
echo json_encode($lista);


$search = new Usuario();
$search = Usuario::search("jo");
echo json_encode($search);


$usuario = new Usuario();
$usuario->login("marco","qwerty");
echo $usuario;


$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@123");
$aluno->insert();
*/

$usuario = new Usuario();
$usuario->loadById(7);

$usuario->update("professor", "@1as@");
echo $usuario;


?>