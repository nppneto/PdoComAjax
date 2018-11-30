<?php
require_once('../app/controllers/usuario.php');

//$dados = array('nome' => $_POST['nome'], 'email' => $_POST['email'], 'senha' => $_POST['senha']);

$controllerUser = new ControllerUser();

$method = $_POST['action'];
// var_dump($method);
// exit();
$controllerUser->{$method}($_POST);
