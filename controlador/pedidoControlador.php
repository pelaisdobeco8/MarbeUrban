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
        
        $msg = adicionarPedido($idFormaPagamento, $idusuario, $idendereco, $valorcupom, $produtosCarrinho);
        echo $msg;
    
        
    }else{
        $dados = array();
        $dados["pagamentos"] = pegarTodosPagamentos();
        // $dados["enderecos"] = pegarEnderecoPorId();
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
