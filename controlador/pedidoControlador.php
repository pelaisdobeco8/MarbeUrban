<?php

function salvar () {
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idusuario = $_POST["idusuario"];
        $idendereco = $_POST["idendereco"];
        $valorcupom = $_POST["valorcupom"];
        $produtosCarrinho = $_SESSION["carrinho"];   
        
        $msg = adicionarPedido($idFormaPagamento, $idusuario, $idendereco, $valorcupom, $produtosCarrinho);
        echo $msg;
    }else{
        
    }
    exibir ("pedido/formulario");
    
}

function ver ($idpedido) {
    $dados["pedidos"] = pegarPedidoPorId($idpedido);
    exibir ("pedido/visualizar" , $dados);
}

function listar () {
    $dados = array ();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir ("pedido/listar", $dados);
}