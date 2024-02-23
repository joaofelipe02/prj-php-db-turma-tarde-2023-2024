<?php
include 'conexao.php';
include 'classeLogin.php';

$login = $_GET['login'];
$senha = $_GET['senha'];

$dadosUsuarios = classeLogin::verificarLogin($myslqli, $login, $senha);

foreach ($dadosUsuarios as $dadosUsuarios) {
    if (!empty($dadosUsuarios['login']) && !empty($dadosUsuarios['senha'])) {
        header('location: pgInicial.php');
    }
}
?>