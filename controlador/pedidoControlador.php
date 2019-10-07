<?php

function salvar () {
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idendereco = $_POST["idendereco"];
        $nomecupom = $_POST["nomecupom"];
        $produtosCarrinho = $_SESSION["carrinho"];      
    }
}