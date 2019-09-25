<?php

require_once "modelo/clienteModelo.php";

function adicionar () {
	if (ehPost ()) {
		$nomeusuario = $_POST ["nomeusuario"];
                $email = $_POST ["email"];
		$senha = $_POST ["senha"];
                $cpf = $_POST ["cpf"];
                $datadenascimento = $_POST ["datadenacimento"];
		$sexo = $_POST ["sexo"];
                $errors = array ();
                
            if (strlen(trim($nomeusuario)) == 0){
                $errors[] = "Você deve inserir um nome";
            }
            if (strlen(trim($email)) == 0){
                $errors[] = "Você deve inserir um email";
            }else {
                if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                    $errors[] = "Inserir um e-mail válido.";
                }
            }
            if (strlen(trim($senha)) == 0) {
                $errors[] = "É necessário criar uma senha";
            }
            if (strlen(trim($cpf)) == 0){
                $errors[] = "Você deve inserir um cpf";
            }
            if (strlen(trim($datadenascimento)) == 0){
                $errors[] = "Você deve inserir sua data de nascimento";
            }
            if (strlen(trim($sexo)) == 0){
                $errors[] = "Você deve inserir um sexo";
            }
            
            if (count($errors)> 0){
                $dadoserro = array();
                $dadoserro["errors"] = $errors;
                exibir ("cliente/formulario", $dadoserro);
            }else {
                $msg = adicionarCliente($nomeusuario, $email, $senha, $cpf, $datadenascimento, $sexo );
                echo $msg;
            }
    
	}else {
		exibir ("cliente/formulario");
	}
}

function listar () {
    $dados = array ();
    $dados["usuarios"] = pegarTodosClientes();
    exibir ("cliente/listar", $dados);
}

function ver ($idusuario){
    $dados["usuarios"] = pegarClientePorId($idusuario);
    exibir ("cliente/visualizar" , $dados);
}

function deletar ($idusuario){
    $msg = deletarCliente($idusuario);
    redirecionar("./cliente/listar");
}

function editar ($idusuario) {
    if (ehPost()) {
        $nomeusuario = $_POST ["nomeusuario"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $cpf = $_POST ["cpf"];
        $datadenascimento = $_POST ["datadenascimento"];
        $sexo = $_POST ["sexo"];
        
        editarCliente($idusuario, $nomeusuario, $email, $senha, $cpf, $datadenascimento, $sexo);
        redirecionar ("cliente/listar");
    }else {
        $dados["usuarios"] = pegarClienteporId($idusuario);
        exibir("cliente/formulario", $dados);
    }
}


