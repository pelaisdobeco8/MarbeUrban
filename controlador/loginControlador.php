<?php

require_once "modelo/clienteModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarClientePorEmailSenha($email, $senha);
        
        if (acessoLogar($usuario)) {
            alert("Bem vindo" . $login);
            redirecionar("usuario");
        } else {
            alert("Usuário ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    acessoDeslogar();
    alert("Deslogado com sucesso!");
    redirecionar("usuario");
}

?>