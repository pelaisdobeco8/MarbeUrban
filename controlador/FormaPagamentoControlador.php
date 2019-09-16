<?php

require_once "modelo/FormaPagamentoModelo.php";

function adicionar (){
    if (ehPost ()){
        $descricao = $_POST["descricao"];
        $errors = array();
        
        if (strlen(trim($descricao)) == 0){
            $errors[] = "Você deve inserir uma forma de pagamento";
    
        }else {
                $msg = adicionarPagamento($descricao);
                echo $msg;
        }  
   
    }else {
        exibir ("FormaPagamento/formulario");
    }
}

function listar () {
    $dados = array ();
    $dados["pagamentos"] = pegarTodosPagamentos();
    exibir ("FormaPagamento/listar", $dados);
}

function ver ($idFormaPagamento){
    $dados["pagamentos"] = pegarPagamentoPorId($idFormaPagamento);
    exibir ("FormaPagamento/visualizar" , $dados);
}

function deletar ($idFormaPagamento){
    $msg = deletarPagamento($idFormaPagamento);
    redirecionar("./FormaPagamento/listar");
}

function editar ($idFormaPagamento) {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
        
        editarPagamento ($idFormaPagamento, $descricao);
        redirecionar ("FormaPagamento/listar");
    }else {
        $dados["pagamentos"] = pegarPagamentoPorId ($idFormaPagamento);
        exibir ("FormaPagamento/formulario", $dados);
    }
}
