<?php

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
        
    }
    exibir("pedidos/listar");
    
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