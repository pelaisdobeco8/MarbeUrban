<?php

require_once "modelo/pedidoModelo.php";
require_once "modelo/formaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php";

function salvar () {
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idusuario = $_SESSION["idusuario"];
        $idendereco = $_POST["idendereco"];
        $valorcupom = $_POST["valorcupom"];
        $produtosCarrinho = $_SESSION["carrinho"];   
        
        $msg = salvarPedido($idFormaPagamento, $idusuario, $idendereco, $valorcupom, $produtosCarrinho);
        echo $msg;
    
        
    }else{
        $dados = array();
        $dados["pagamentos"] = pegarTodosPagamentos();
        $chamar = acessoPegarUsuarioLogado();
        $dados["enderecos"] = pegarEnderecoPorIdUsuario($chamar);
        exibir("pedidos/formulario", $dados);
    }
    
    
}

function listar () {
    $dados = array ();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir ("pedidos/listar", $dados);
}

function ver ($idpedido) {
    $dados["pedidos"] = pegarPedidoPorId($idpedido);
    exibir ("pedidos/visualizar" , $dados);
}

function adicionar($id){

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }
    $alt = false ;

    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produtos["id"] = $id;
        $produtos["quantidade"]= 1;
        $_SESSION["carrinho"][] = $produtos;   
    }
    redirecionar("carrinho/index");    
}