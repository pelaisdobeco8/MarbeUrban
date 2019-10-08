<?php

function salvar () {
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idusuario = $_POST["idusuario"];
        $idendereco = $_POST["idendereco"];
        $valorcupom = $_POST["valorcupom"];
        $produtosCarrinho = $_SESSION["carrinho"];      
    }
}

function ver () {
    
}