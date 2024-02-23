<?php
include 'conexao.php'
class classeLogin {

    public static function verificarLogin($myslqli, $login, $senha);
    {
        $usuario = "SELECT * FROM tb_usuarios WHERE login = '$login' AND senha = '$senha' AND ativo = '1' ";

        $sqlUsuario = $myslqli->query($usuario) or die($myslqli->error);

        return $sqlUsuario;
    }
        

}



?>